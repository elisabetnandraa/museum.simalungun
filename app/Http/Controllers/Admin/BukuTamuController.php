<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BukuTamu;
use App\Models\Ulasan; 

class BukuTamuController extends Controller
{
    public function index()
    {
        $bukuTamus = BukuTamu::all();
        return view('admin.bukutamu.index', compact('bukuTamus'));
    }

    public function destroy(BukuTamu $bukuTamu)
    {
        $bukuTamu->delete();
        return back()->with('sukses', 'Buku Tamu berhasil dihapus');
    }

    public function create()
    {
       
        $ulasans = Ulasan::all(); 
        return view('tamu.bukutamu.create', compact('ulasans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'tanggal_kunjungan' => 'required|date',
        ]);

        BukuTamu::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tanggal_kunjungan' => $request->tanggal_kunjungan,
        ]);

        return redirect()->back()->with('sukses', 'Data buku tamu berhasil dikirim!');
    }
}
