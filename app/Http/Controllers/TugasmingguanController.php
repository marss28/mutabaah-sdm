<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugasmingguan;

class TugasmingguanController extends Controller
{
    public function index(){
        $tugasmingguan = Tugasmingguan::paginate(5);
        return view('back.tugasmingguan.index',compact('tugasmingguan'));
    }


    public function formtugasmingguan(){
        return view('back.tugasmingguan.tambah');
     }
}

    
    

