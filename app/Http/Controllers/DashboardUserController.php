<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardUserController extends Controller
{
    public function dashboarduser()
    {
       
       
        return view('back.dashboard.dashboarduser');
    }
}
