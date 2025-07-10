<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannerinfoController extends Controller
{
    public function index(){

        return view('back.bannerinfo.index');
    }
}
