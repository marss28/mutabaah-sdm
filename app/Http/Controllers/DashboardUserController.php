<?php

namespace App\Http\Controllers;


use App\Models\Tugasharian;

use App\Models\Tugasmingguan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardUserController extends Controller
{

    public function UserIndex(){

        $tugasharian = Tugasharian::count();
        $tugasmingguan = Tugasmingguan::count();
        $tugasbulanan = Tugasbulanan::count();
        
        return view('back.dashboard.dashboarduser', compact('tugasharian', 'tugasmingguan', 'tugasbulanan'));
    }
}
