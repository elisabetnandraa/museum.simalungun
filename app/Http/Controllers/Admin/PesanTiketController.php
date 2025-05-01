<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\PesanTiket;
use Illuminate\Support\Facades\Mail;
use App\Mail\TiketTerkirim;
use Midtrans\Snap;

class PesanTiketController extends Controller
{
    public function index()
    {
        $pesanTikets = PesanTiket::all();
        return view('admin.pesantiket.index', compact('pesanTikets'));
    }

    public function create()
    {
        return view('tamu.pesantiket.create');
    }


    public function processPayment()
{
    if (!session()->has('pemesanan')) {
        return redirect()->route('tamu.pesantiket.form')->with('error', 'Data tidak ditemukan.');
    }

    $pemesanan = session('pemesanan');

    $order_id = strtoupper(Str::random(10));
    $pesanan = PesanTiket::create([
        'nomor_tiket' => $order_id,
        'nama_lengkap' => $pemesanan['nama_lengkap'],
        'email' => $pemesanan['email'],
        'no_telepon' => $pemesanan['no_telepon'],
        'jumlah' => $pemesanan['jumlah'],
        'tanggal_pemesanan' => $pemesanan['tanggal_pemesanan'],
        'total_harga' => $pemesanan['total_harga'],
        'status' => 'belum',
    ]);

    \Midtrans\Config::$serverKey = config('midtrans.server_key');
    \Midtrans\Config::$isProduction = config('midtrans.is_production');
    \Midtrans\Config::$isSanitized = config('midtrans.is_sanitized');
    \Midtrans\Config::$is3ds = config('midtrans.is_3ds');

    $params = [
        'transaction_details' => [
            'order_id' => $order_id,
            'gross_amount' => $pemesanan['total_harga'],
        ],
        'customer_details' => [
            'first_name' => $pemesanan['nama_lengkap'],
            'email' => $pemesanan['email'],
            'phone' => $pemesanan['no_telepon'],
        ],
    ];

    $snapToken = \Midtrans\Snap::getSnapToken($params);

    return view('tamu.pesantiket.payment', compact('snapToken'));
}


public function previewPayment(Request $request)
{
    $data = $request->only(['nama_lengkap', 'email', 'no_telepon', 'tanggal_pemesanan', 'jumlah']);
    $data['total_harga'] = $data['jumlah'] * 5000;

    session(['pemesanan' => $data]);

    return view('tamu.pesantiket.payment-preview', ['pemesanan' => $data]);
}



    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email',
            'no_telepon' => 'required|string|max:15',
            'jumlah' => 'required|integer|min:1',
            'tanggal_pemesanan' => 'required|date',
            'total_harga' => 'required|numeric',
        ]);

        $order_id = strtoupper(Str::random(10));

        $pesanan = PesanTiket::create([
            'nomor_tiket' => $order_id,
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'no_telepon' => $request->no_telepon,
            'jumlah' => $request->jumlah,
            'tanggal_pemesanan' => $request->tanggal_pemesanan,
            'total_harga' => $request->total_harga,
            'status' => 'belum',
        ]);

        return redirect()->route('admin.pesantiket.index')->with('success', 'Tiket berhasil dipesan!');
    }



    public function update($id)
    {
        $pesanTiket = PesanTiket::findOrFail($id);
        $pesanTiket->status = $pesanTiket->status === 'belum' ? 'selesai' : 'belum';
        $pesanTiket->save();

        return redirect()->route('admin.pesantiket.index')->with('success', 'Pesanan berhasil diperbarui.');
    }

   

    public function midtransCallback(Request $request)
{
    \Log::info('Midtrans Callback:', $request->all());

    $serverKey = trim(config('midtrans.server_key'));
    $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

    if ($hashed !== $request->signature_key) {
        \Log::error("Invalid signature for order: " . $request->order_id);
        return response()->json(['message' => 'Invalid signature'], 403);
    }

    $pesanan = PesanTiket::where('nomor_tiket', $request->order_id)->first();

    if (!$pesanan) {
        \Log::error("Pesanan tidak ditemukan untuk order_id: " . $request->order_id);
        return response()->json(['message' => 'Order not found'], 404);
    }
    
    // Hapus log error yang tidak perlu
    // \Log::error($pesanan);
    
    switch ($request->transaction_status) {
        case 'settlement':
        case 'capture': // Tambahkan pengiriman email untuk status capture juga
            $pesanan->status = 'selesai';
            $pesanan->save();

            try {
                // Tambahkan logging sebelum mencoba mengirim email
                \Log::info("Mencoba mengirim email tiket ke: " . $pesanan->email);
                Mail::to($pesanan->email)->send(new TiketTerkirim($pesanan));
                \Log::info("Email tiket berhasil dikirim ke: " . $pesanan->email);
            } catch (\Exception $e) {
                \Log::error("Gagal mengirim email tiket: " . $e->getMessage());
                \Log::error("Stack trace: " . $e->getTraceAsString());
            }
            break;

        case 'cancel':
        case 'deny':
            $pesanan->status = 'gagal';
            $pesanan->save();
            break;

        case 'pending':
            $pesanan->status = 'pending';
            $pesanan->save();
            break;

        default:
            $pesanan->status = 'gagal';
            $pesanan->save();
            break;
    }

    \Log::info("Pesanan berhasil diperbarui: " . $request->order_id);

    return response()->json(['message' => 'Transaction updated successfully']);
}
    
}
