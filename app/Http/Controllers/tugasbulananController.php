<?php

namespace App\Http\Controllers;

use App\Models\tugasbulanan;
use Illuminate\Http\Request;
use App\Models\datatugasbulanan;
use Illuminate\Support\Facades\Auth;

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
        'datatugasbulanan_id' => 'required|array|exists:datatugasbulanans,id',
        'waktu_tugas' => 'required|date_format:H:i',
        'deskripsi' => 'required|string|min:3|max:255',
    ]);


        foreach ($request->datatugasbulanan_id as $id) {
    tugasbulanan::create([
        'user_id' => Auth::id(),
        'datatugasbulanan_id' => $id,
        'waktu_tugas' => $request->waktu_tugas,
        'deskripsi' => $request->deskripsi,
    ]);
}



        return redirect()->route('tugasbulanan')->with('success','Data Berhasil Ditambahkan');
     }


     public function edittugasbulanan($id)
{
    $target = tugasbulanan::findOrFail($id);

    // Ambil semua tugas yang 1 grup (waktu & deskripsi sama)
    $tugasbulanan = tugasbulanan::where('waktu_tugas', $target->waktu_tugas)
        ->where('deskripsi', $target->deskripsi)
        ->get();

    $datatugasbulanan = datatugasbulanan::all();

    return view('back.tugas_bulanan.edit', compact('tugasbulanan', 'datatugasbulanan', 'target'));
}

 public function updatetugasbulanan(Request $request, $id)
{
    $request->validate([
        'datatugasbulanan_id' => 'required|array',
        'datatugasbulanan_id.*' => 'exists:datatugasbulanans,id',
        'waktu_tugas' => 'required|date_format:H:i',
        'deskripsi' => 'required|string|min:3|max:255',
    ]);


    // Ambil salah satu entry lama (untuk tahu waktu_tugas & deskripsi lama)
    $target = tugasbulanan::findOrFail($id);

    // Hapus semua tugas lama dalam 1 grup
    tugasbulanan::where('waktu_tugas', $target->waktu_tugas)
        ->where('deskripsi', $target->deskripsi)
        ->delete();

    // Simpan ulang berdasarkan checkbox terpilih
    foreach ($request->datatugasbulanan_id as $id_tugas) {
        tugasbulanan::create([
            'datatugasbulanan_id' => $id_tugas,
            'waktu_tugas' => $request->waktu_tugas,
            'deskripsi' => $request->deskripsi,
        ]);
    }

    return redirect()->route('tugasbulanan')->with('success', 'Data berhasil diperbarui.');
}



    public function deletetugasbulanan($id)
{
    $tugasbulanan = tugasbulanan::findOrFail($id);
    $tugasbulanan->delete();

    return redirect()->route('tugasbulanan')->with('success', 'Data berhasil dihapus');
}
}

    
    

