<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataMingguanController extends Controller
{
    public function index(){
        return view('back.datamingguan.index');
    }
}
