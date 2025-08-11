<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tugasharian;
use App\Models\tugasbulanan;
use Illuminate\Http\Request;
use App\Models\Tugasmingguan;

class DashboardAdminController extends Controller
{
   

   public function index(){

      $totalUser = User::count();
      $tugasharian = Tugasharian::count();
      $tugasmingguan = Tugasmingguan::count();
      $tugasbulanan = tugasbulanan::count();

      return view('back.dashboard.dashboard', compact('totalUser', 'tugasharian', 'tugasmingguan', 'tugasbulanan'));
    
   }



}
