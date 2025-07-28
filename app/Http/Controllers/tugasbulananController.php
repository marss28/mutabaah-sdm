<?php

namespace App\Http\Controllers;

use App\Models\tugasbulanan;
use Illuminate\Http\Request;
use App\Models\datatugasbulanan;

class tugasbulananController extends Controller
{
    public function index(){
        $tugasbulanan = TugasBulanan::paginate(5);
        return view('back.tugas_bulanan.tugas_bulanan',compact('tugasbulanan'));
    }


    public function formtugasbulanan(){

        $datatugasbulanan = datatugasbulanan::all();
        return view('back.tugas_bulanan.create', compact('datatugasbulanan'));
     }


     public function storetugasbulanan(Request $request)
{
    $request->validate([
        'datatugasbulanan_id' => 'required|exists:datatugasbulanans,id',
        'waktu_tugas' => 'required|date_format:H:i',
        'deskripsi' => 'required|string|min:3|max:255',
    ]);

    // lanjut simpan data ke database
        $tugasbulanan = $request->all();
        tugasbulanan::create($tugasbulanan);

        return redirect()->route('tugasbulanan')->with('success','Data Berhasil Ditambahkan');
     }


     public function edittugasbulanan($id)
    {
        $tugasbulanan = tugasbulanan::findOrFail($id);
        $datatugasbulanan = datatugasbulanan::all();
        return view('back.tugas_bulanan.edit', compact('tugasbulanan', 'datatugasbulanan'));
    }

    public function updatetugasbulanan(Request $request, $id)
{
    $tugasbulanan = tugasbulanan::findOrFail($id);
    
    
    $request->validate([
        'datatugasbulanan_id' => 'required|exists:datatugasbulanans,id',
        'waktu_tugas' => 'required|date_format:H:i',
        'deskripsi' => 'required|string|min:3|max:255',
    ]);

    $tugasbulanan->update([
        'datatugasbulanan' => $request->datatugasbulanan,
        'waktu_tugas' => $request->waktu_tugas,
        'deskripsi' => $request->deskripsi,
    ]);

    return redirect()->route('tugasbulanan')->with('success', 'Data berhasil diperbarui.');
}


    public function deletetugasbulanan($id)
{
    $tugasbulanan = tugasbulanan::findOrFail($id);
    $tugasbulanan->delete();

    return redirect()->route('tugasbulanan')->with('success', 'Data berhasil dihapus');
}
}

    
    

