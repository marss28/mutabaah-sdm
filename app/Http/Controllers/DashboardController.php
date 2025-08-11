<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TugasHarian;
use App\Models\TugasMingguan;
use App\Models\TugasBulanan;

class DashboardController extends Controller
{
    public function index()
    {
        $harian_total = TugasHarian::count();
        $harian_selesai = TugasHarian::where('status', 'selesai')->count();
        $persen_harian = $harian_total ? ($harian_selesai / $harian_total) * 100 : 0;

        $mingguan_total = TugasMingguan::count();
        $mingguan_selesai = TugasMingguan::where('status', 'selesai')->count();
        $persen_mingguan = $mingguan_total ? ($mingguan_selesai / $mingguan_total) * 100 : 0;

        $bulanan_total = TugasBulanan::count();
        $bulanan_selesai = TugasBulanan::where('status', 'selesai')->count();
        $persen_bulanan = $bulanan_total ? ($bulanan_selesai / $bulanan_total) * 100 : 0;

        return view('back.dashboard.dashboard', compact(
            'persen_harian', 'persen_mingguan', 'persen_bulanan'
        ));
    }
}
