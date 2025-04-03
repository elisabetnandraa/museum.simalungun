<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::all();
        return view('admin.galeri.index', compact('galeris'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'keterangan' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img'), $imageName);

            $data['gambar'] = 'assets/img/' . $imageName;
        }

        Galeri::create($data);
        return back()->with('sukses', 'Galeri berhasil ditambahkan');
    }

    public function update(Request $request, Galeri $galeri)
    {
        $data = $request->validate([
            'keterangan' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img'), $imageName);

            $data['gambar'] = 'assets/img/' . $imageName;
        } else {
            $data['gambar'] = $galeri->gambar;
        }

        $galeri->update($data);
        return back()->with('sukses', 'Galeri berhasil diperbarui');
    }

    public function destroy(Galeri $galeri)
    {

        $galeri->delete();
        return back()->with('sukses', 'Galeri berhasil dihapus');
    }

    public function show()
    {
        $galeris = Galeri::all();
        return view('tamu.galeri.show', compact('galeris'));
    }
}
