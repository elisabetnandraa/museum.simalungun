<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwals = Jadwal::all();
        return view('admin.jadwal.index', compact('jadwals'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'hari' => 'required|string',
            'jam' => 'required|string', 
        ]);

        Jadwal::create($data);
        return back()->with('sukses', 'Jadwal berhasil ditambahkan');
    }

    public function update(Request $request, Jadwal $jadwal)
    {
        $data = $request->validate([
            'hari' => 'required|string',
            'jam' => 'required|string', 
        ]);

        $jadwal->update($data);
        return back()->with('sukses', 'Jadwal berhasil diperbarui');
    }

    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();
        return back()->with('sukses', 'Jadwal berhasil dihapus');
    }
}
