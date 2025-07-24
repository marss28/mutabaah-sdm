<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datatugasharian;

class DatatugasharianController extends Controller
{
     public function index()
    {
        $datatugasharian = datatugasharian::paginate(2);
       
        return view('back.datatugasharian.index', compact('datatugasharian'));
    }

     public function create(){

        
        return view('back.datatugasharian.tambah');
     }
   
    public function store(Request $request)
    {
        $request->validate([
            'nama_tugas' => 'required|string|max:255',
        ]);

        datatugasharian::create([
            'nama_tugas' => $request->nama_tugas,
        ]);

        return redirect()->route('datatugasharian')->with('sukses', 'Nama tugas harian berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $datatugasharian = datatugasharian::findOrFail($id);
        return view('back.datatugasharian.edit', compact('datatugasharian'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'datatugasharian' => 'required|string|max:255',
        ]);

        $datatugasharian = datatugasharian::findOrFail($id);
        $datatugasharian->update([
            'datatugasharian' => $request->datatugasharian,
        ]);

        return redirect()->route('datatugasharian')->with('sukses', 'Nama tugas harian berhasil diupdate.');
    }

    public function destroy($id)
    {
        $datatugasharian = datatugasharian::findOrFail($id);
        $datatugasharian->delete();

        return redirect()->route('datatugasharian')->with('success', 'Nama Tugas Harian berhasil dihapus.');
    }
}
