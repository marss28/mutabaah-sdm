<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bannerinfo;


class BannerinfoController extends Controller
{
    public function index(){
        $bannerinfo = bannerinfo::paginate(5);
        return view('back.bannerinfo.index', compact('bannerinfo'));
    }

    public function storeBannerinfo(Request $request)
    {
        $request->validate([
            'nama_banner'=> 'required|string|max:255',
            'foto'=> 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $imagePath = $request->file('foto')->store('images', 'public');

        Bannerinfo::create([
            'nama_banner' =>$request->nama_banner,
            'foto' =>$imagePath
        ]);

        return redirect()->route('banner_info')->with('success', 'Banner berhasil disimpan!');
    
    }

    public function formbannerinfo(){

        $bannerinfo = bannerinfo::all();
        return view('back.bannerinfo.tambah', compact('bannerinfo'));
    }
    
    
}
