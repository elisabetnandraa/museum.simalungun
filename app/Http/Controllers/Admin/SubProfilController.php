<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubProfil;

class SubProfilController extends Controller
{
    public function index()
    {
        $subprofils = SubProfil::all();
        return view('admin.subprofil.index', compact('subprofils'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'penjelasan' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img'), $imageName);

            $data['gambar'] = 'assets/img/' . $imageName;
        }

        SubProfil::create($data);
        return back()->with('sukses', 'SubProfil berhasil ditambahkan');
    }

    public function update(Request $request, SubProfil $subprofil)
    {
        $data = $request->validate([
            'penjelasan' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img'), $imageName);

            $data['gambar'] = 'assets/img/' . $imageName;
        } else {
            $data['gambar'] = $subprofil->gambar;
        }

        $subprofil->update($data);
        return back()->with('sukses', 'SubProfil berhasil diperbarui');
    }

    public function destroy(SubProfil $subprofil)
    {

        $subprofil->delete();
        return back()->with('sukses', 'SubProfil berhasil dihapus');
    }
}
