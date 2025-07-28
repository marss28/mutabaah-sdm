<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugasmingguan;
use App\Models\DataTugasMingguan;

class TugasmingguanController extends Controller
{
    public function index(){
        $tugasmingguan = Tugasmingguan::with('dataTugas')->paginate(5);
        return view('back.tugasmingguan.index',compact('tugasmingguan'));
    }


    public function formtugasmingguan(){
    $datatugasmingguan = DataTugasMingguan::all();
    return view('back.tugasmingguan.tambah', compact('datatugasmingguan'));
}



     public function storetugasmingguan(Request $request)
{
            $request->validate([
            'data_tugas_mingguan' => 'required|exists:data_tugas_mingguan,id',
            'waktu_tugas' => 'required|date_format:H:i',
            'deskripsi' => 'required|string|max:255',
        ]);


            Tugasmingguan::create([
            'data_tugas_mingguan' => $request->data_tugas_mingguan,
            'waktu_tugas' => $request->waktu_tugas,
            'deskripsi' => $request->deskripsi,
        ]);



        return redirect()->route('tugasmingguan')->with('success','Data Berhasil Ditambahkan');
     }


     public function edittugasmingguan($id)
     {
         $data = Tugasmingguan::findOrFail($id);
         $datatugasmingguan = DataTugasMingguan::all(); // tambahkan ini
        return view('back.tugasmingguan.edit', compact('data', 'datatugasmingguan'));
     }   

    public function updatetugasmingguan(Request $request, $id)
{
    $request->validate([
        'data_tugas_mingguan' => 'required|exists:data_tugas_mingguan,id',
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

    
    

