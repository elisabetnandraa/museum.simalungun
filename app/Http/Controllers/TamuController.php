<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Profil;
use App\Models\Jadwal;
use App\Models\SubProfil;

class TamuController extends Controller
{
    public function index()
    {
        $beritas = Berita::all(); 
        $profils = Profil::all();
        $jadwals = Jadwal::all();
        $subprofils = SubProfil::all();

        return view('tamu.dashboard', compact('beritas', 'profils', 'jadwals', 'subprofils')); 
    }
}
