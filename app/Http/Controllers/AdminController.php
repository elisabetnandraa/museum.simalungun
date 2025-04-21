<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuTamu;
use Carbon\Carbon;

class AdminController extends Controller
{
        public function index(Request $request)
    {
        $year = $request->input('year', now()->year);

        $monthlyData = BukuTamu::selectRaw('MONTH(tanggal_kunjungan) as month, COUNT(*) as total')
            ->whereYear('tanggal_kunjungan', $year)
            ->groupByRaw('MONTH(tanggal_kunjungan)')
            ->pluck('total', 'month');

        $labels = [];
        $data = [];

        for ($i = 1; $i <= 12; $i++) {
            $labels[] = Carbon::create()->month($i)->format('F');
            $data[] = $monthlyData[$i] ?? 0;
        }

        return view('admin.dashboard', compact('labels', 'data', 'year'));
    }
}
