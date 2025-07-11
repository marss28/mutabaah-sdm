<?php

namespace App\Http\Controllers;

use App\Models\tugasbulanan;
use Illuminate\Http\Request;

class tugasbulananController extends Controller
{
    public function index(){
        $tugasbulanan = tugasbulanan::paginate(5);
        return view('back.tugas_bulanan.tugas_bulanan', compact('tugasbulanan'));
    }


    public function formtugasbulanan()
    {
        return view('back.tugas_bulanan.create');
    }
}
