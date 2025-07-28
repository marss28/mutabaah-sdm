<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataTugasMingguan;


class DataTugasMingguanController extends Controller
{
     public function index()
    {
        $datatugasmingguan = DataTugasMingguan::paginate(5);
       
        return view('back.datatugasmingguan.index', compact('datatugasmingguan'));
    }

     public function create(){

        
        return view('back.datatugasmingguan.tambah');
     }
   
    public function store(Request $request)
    {
        $request->validate([
            'nama_tugas' => 'required|string|max:255',
        ]);

        datatugasmingguan::create([
            'nama_tugas' => $request->nama_tugas,
        ]);

        return redirect()->route('datatugasmingguan')->with('sukses', 'Nama tugas mingguan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $datatugasmingguan = DataTugasMingguan::findOrFail($id);
        return view('back.datatugasmingguan.edit', compact('datatugasmingguan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'datatugasmingguan' => 'required|string|max:255',
        ]);

        $datatugasmingguan = DataTugasMingguan::findOrFail($id);
        $datatugasmingguan->update([
            'datatugasmingguan' => $request->datatugasmingguan,
        ]);

        return redirect()->route('datatugasmingguan')->with('sukses', 'Nama tugas mingguan berhasil diupdate.');
    }

    public function destroy($id)
    {
        $datatugasmingguan = dataTugasMingguan::findOrFail($id);
        $datatugasmingguan->delete();

        return redirect()->route('datatugasmingguan')->with('success', 'Nama Tugas mingguan berhasil dihapus.');
    }
}
