<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ulasan;

class UlasanController extends Controller
{
    public function index()
    {
        $ulasans = Ulasan::all();
        return view('admin.ulasan.index', compact('ulasans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nama' => 'required|string|max:100',
        ]);

        Ulasan::create([
            'ulasan' => $request->ulasan,
            'nama' => $request->nama,
        ]);

        return redirect()->back()->with('sukses', 'Terima kasih atas ulasannya.');
    }


    public function destroy(Ulasan $ulasan)
    {
        $ulasan->delete();
        return back()->with('sukses', 'Ulasan berhasil dihapus');
    }
}
