<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pameran;
use Illuminate\Http\Request;

class PameranController extends Controller
{
    public function index()
    {
        $pamerans = Pameran::all();
        return view('admin.pameran.index', compact('pamerans'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img'), $imageName);

            $data['gambar'] = 'assets/img/' . $imageName;
        }

        Pameran::create($data);
        return back()->with('sukses', 'Pameran berhasil ditambahkan');
    }

    public function update(Request $request, Pameran $pameran)
    {
        $data = $request->validate([
            'judul' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img'), $imageName);

            $data['gambar'] = 'assets/img/' . $imageName;
        } else {
            $data['gambar'] = $pameran->gambar;
        }

        $pameran->update($data);
        return back()->with('sukses', 'Pameran berhasil diperbarui');
    }

    public function destroy(Pameran $pameran)
    {

        $pameran->delete();
        return back()->with('sukses', 'Pameran berhasil dihapus');
    }

    public function show()
    {
        $pamerans = Pameran::all();
        return view('tamu.pameran.show', compact('pamerans'));
    }
}
