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


     public function storetugasmingguan(Request $request)
{
    $request->validate([
        'data_tugas_mingguan' => 'required|string',
        'waktu_tugas' => 'required|date_format:H:i',
        'deskripsi' => 'required|string|min:3|max:255',
    ]);

    // lanjut simpan data ke database
        $data = $request->all();
        Tugasmingguan::create($data);

        return redirect()->route('tugasmingguan')->with('success','Data Berhasil Ditambahkan');
     }


     public function edittugasmingguan($id)
    {
        $data = Tugasmingguan::findOrFail($id);
        return view('back.tugasmingguan.edit', compact('data'));
    }




    public function updatetugasmingguan(Request $request, $id)
{
    $request->validate([
        'data_tugas_mingguan' => 'required|string',
        'waktu_tugas' => 'required|date_format:H:i',
        'deskripsi' => 'required|string|min:3|max:255',
    ]);

    $data = Tugasmingguan::findOrFail($id);

    $data->update([
        'data_tugas_mingguan' => $request->data_tugas_mingguan,
        'waktu_tugas' => $request->waktu_tugas,
        'deskripsi' => $request->deskripsi,
    ]);

    return redirect()->route('tugasmingguan')->with('success', 'Data berhasil diperbarui.');
}


    public function deletetugasmingguan($id)
{
    $data = Tugasmingguan::findOrFail($id);
    $data->delete();

    return redirect()->route('tugasmingguan')->with('success', 'Data berhasil dihapus');
}


        

     
}

    
    

