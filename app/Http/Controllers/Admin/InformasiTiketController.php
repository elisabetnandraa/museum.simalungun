<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InformasiTiket;

class InformasiTiketController extends Controller
{
    public function index()
    {
        $informasiTikets = InformasiTiket::all();
        return view('admin.informasitiket.index', compact('informasiTikets'));
    }

    public function update(Request $request, InformasiTiket $informasiTiket)
    {
        $data = $request->validate([
            'harga' => 'required|numeric|min:0',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img'), $imageName);

            $data['gambar'] = 'assets/img/' . $imageName;
        } else {
            $data['gambar'] = $informasiTiket->gambar;
        }

        $informasiTiket->update($data);
        return back()->with('sukses', 'Informasi Tiket berhasil diperbarui');
    }

    public function destroy(InformasiTiket $informasiTiket)
    {

        $informasiTiket->delete();
        return back()->with('sukses', 'Informasi Tiket berhasil dihapus');
    }

    public function showForGuest()
    {
        $tiket = InformasiTiket::first(); 
        return view('tamu.informasitiket.show', compact('tiket'));
    }
    


}
