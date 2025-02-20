<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $profils = Profil::all();
        return view('admin.profil.index', compact('profils'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img'), $imageName);

            $data['gambar'] = 'assets/img/' . $imageName;
        }

        Profil::create($data);
        return back()->with('sukses', 'Profil berhasil ditambahkan');
    }

    public function update(Request $request, Profil $profil)
    {
        $data = $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img'), $imageName);

            $data['gambar'] = 'assets/img/' . $imageName;
        } else {
            $data['gambar'] = $profil->gambar;
        }

        $profil->update($data);
        return back()->with('sukses', 'Profil berhasil diperbarui');
    }

    public function destroy(Profil $profil)
    {

        $profil->delete();
        return back()->with('sukses', 'Profil berhasil dihapus');
    }
}
