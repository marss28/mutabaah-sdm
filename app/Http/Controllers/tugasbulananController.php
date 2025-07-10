<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tugasbulananController extends Controller
{
    public function index(){
        return view('back.dashboard.tugas_bulanan.tugas_bulanan');
    }
}
