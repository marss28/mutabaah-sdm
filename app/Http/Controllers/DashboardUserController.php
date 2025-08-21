<?php

namespace App\Http\Controllers;


use App\Models\bannerinfo;

use App\Models\Tugasharian;

use App\Models\tugasbulanan;
use Illuminate\Http\Request;
use App\Models\Tugasmingguan;
use Illuminate\Support\Facades\Auth;

class DashboardUserController extends Controller
{

    public function UserIndex(){

        $tugasharian = Tugasharian::count();
        $tugasmingguan = Tugasmingguan::count();
        $tugasbulanan = tugasbulanan::count();
       
        $bannerinfo = bannerinfo::latest()->get(); 
        
        return view('back.dashboard.dashboarduser', compact('tugasharian', 'tugasmingguan', 'tugasbulanan', 'bannerinfo'));
    }

    
}
