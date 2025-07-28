<?php

namespace App\Http\Controllers;

use App\Models\Tugasharian;
use App\Models\tugasbulanan;
use Illuminate\Http\Request;
use App\Models\DashboardUser;
use App\Models\Tugasmingguan;

class DashboardUserController extends Controller
{
   public function dashboardUser()
{
    $dashboard = DashboardUser::with([
        'tugasHarian',
        'tugasMingguan',
        'tugasBulanan',
        'bannerInfo'
    ])->first();

    // Hitung jumlah tugas (asumsi kamu punya relasi lebih dari 1 tugas di tabel-tabel itu)
    $jumlahHarian = Tugasharian::count();
    $jumlahMingguan = Tugasmingguan::count();
    $jumlahBulanan = tugasbulanan::count();

    return view('back.dashboard.dashboarduser', compact('dashboard', 'jumlahHarian', 'jumlahMingguan', 'jumlahBulanan'));
}
}
