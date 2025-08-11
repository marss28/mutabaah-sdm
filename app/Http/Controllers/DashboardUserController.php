<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugasharian;

use App\Models\Tugasmingguan;


class DashboardUserController extends Controller
{
    public function UserIndex(){

        $tugasharian = Tugasharian::count();
        $tugasmingguan = Tugasmingguan::count();
        $tugasbulanan = Tugasbulanan::count();
        
        return view('back.dashboard.dashboarduser', compact('tugasharian', 'tugasmingguan', 'tugasbulanan'));
    }
}
