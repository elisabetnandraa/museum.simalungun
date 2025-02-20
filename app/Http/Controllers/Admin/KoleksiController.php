<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Koleksi;
use Illuminate\Http\Request;

class KoleksiController extends Controller
{
    public function index()
    {
        $koleksis = Koleksi::all();
        return view('admin.koleksi.index', compact('koleksis'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img'), $imageName);

            $data['gambar'] = 'assets/img/' . $imageName;
        }

        Koleksi::create($data);
        return back()->with('sukses', 'Koleksi berhasil ditambahkan');
    }

    public function update(Request $request, Koleksi $koleksi)
    {
        $data = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img'), $imageName);

            $data['gambar'] = 'assets/img/' . $imageName;
        } else {
            $data['gambar'] = $koleksi->gambar;
        }

        $koleksi->update($data);
        return back()->with('sukses', 'Koleksi berhasil diperbarui');
    }

    public function destroy(Koleksi $koleksi)
    {

        $koleksi->delete();
        return back()->with('sukses', 'Koleksi berhasil dihapus');
    }
}
