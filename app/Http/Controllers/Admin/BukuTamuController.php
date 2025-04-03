<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BukuTamu;

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
}
