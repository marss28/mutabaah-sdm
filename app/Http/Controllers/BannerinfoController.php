<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bannerinfo;


class BannerinfoController extends Controller
{
    public function index(){
        $bannerinfo = bannerinfo::paginate(2);
        return view('back.bannerinfo.index', compact('bannerinfo'));
    }

    public function storebanner(Request $request)
    {
        $request->validate([
            'nama_banner'=> 'required|string|max:255',
            'foto'=> 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $imagePath = $request->file('foto')->store('images', 'public');

        bannerinfo::create([
            'nama_banner' =>$request->nama_banner,
            'foto' =>$imagePath
        ]);

        return redirect()->route('bannerinfo')->with('success', 'Banner berhasil disimpan!');
    
    }

    public function formbannerinfo(){

        $bannerinfo = bannerinfo::all();
        return view('back.bannerinfo.tambah', compact('bannerinfo'));
    }
    
    public function editbanner($id){

        $bannerinfo = bannerinfo::findOrFail($id);
        return view('back.bannerinfo.edit', compact('bannerinfo'));
    }

    public function updatebanner($id, Request $request)
{
    $request->validate([
        'nama_banner'=> 'required|string|max:255',
        'foto'=> 'required|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    $bannerinfo = bannerinfo::findOrFail($id);

    // Jika ada gambar baru di-upload
    if ($request->hasFile('foto')) {
        $imagePath = $request->file('foto')->store('images', 'public');
    } else {
        $imagePath = $bannerinfo->foto; // gunakan foto lama
    }

    $bannerinfo->update([
        'nama_banner' => $request->nama_banner,
        'foto' => $imagePath
    ]);

    return redirect()->route('bannerinfo')->with('success', 'Banner berhasil diperbarui!');
}


    public function deletebanner($id)
    {

        $bannerinfo = bannerinfo::findOrFail($id);
        $bannerinfo->delete();
        return redirect()->route('bannerinfo')->with('success', 'Banner berhasil dihapus!');
    }
}
