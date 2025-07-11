<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DataTugasBulananController;

class DataTugasBulananController extends Controller
{
    public function index()
{

    $tugasbulanan = TugasBulanan::with('dataTugasBulanan')->latest()->get();
    return view('back.dashboard.tugas_bulanan.tugas_bulanan', compact('tugas'));

}

}
