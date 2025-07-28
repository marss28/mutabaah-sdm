<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DashboardUserController extends Controller
{
    public function UserIndex(){
        return view('back.dashboard.dashboarduser');
    }
}
