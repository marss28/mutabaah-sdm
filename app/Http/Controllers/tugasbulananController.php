<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tugasbulanan;

class tugasbulananController extends Controller
{
    public function index(){
        $tugasbulanan = TugasBulanan::paginate(5);
        return view('back.tugas_bulanan.tugas_bulanan',compact('tugasbulanan'));
    }


    public function formtugasbulanan(){
        return view('back.tugas_bulanan.create');
     }


     public function storetugasbulanan(Request $request)
{
    $request->validate([
        'data_tugas_bulanan' => 'required|string|min:3|max:255',
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
        return view('back.tugas_bulanan.edit', compact('tugasbulanan'));
    }

    public function updatetugasbulanan(Request $request, $id)
{
    $tugasbulanan = tugasbulanan::findOrFail($id);
    
    $request->validate([
        'data_tugas_bulanan' => 'required|string|min:3|max:255',
        'waktu_tugas' => 'required|date_format:H:i',
        'deskripsi' => 'required|string|min:3|max:255',
    ]);

    $tugasbulanan->update([
        'data_tugas_bulanan' => $request->data_tugas_bulanan,
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

    
    

