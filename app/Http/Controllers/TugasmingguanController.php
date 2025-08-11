<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugasmingguan;
use App\Models\DataTugasMingguan;
use Illuminate\Support\Facades\Auth;

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
            'data_tugas_mingguan' => 'required|array|exists:data_tugas_mingguan,id',
            'waktu_tugas' => 'required|date_format:H:i',
            'deskripsi' => 'required|string|max:255',
        ]);


             foreach ($request->data_tugas_mingguan as $id) {
        Tugasmingguan::create([
        'user_id' => Auth::id(),
        'data_tugas_mingguan' => $id,
        'waktu_tugas' => $request->waktu_tugas,
        'deskripsi' => $request->deskripsi,
        ]);



        return redirect()->route('tugasmingguan')->with('success','Data Berhasil Ditambahkan');
        }
     }


     public function edittugasmingguan($id)
{
    $target = Tugasmingguan::findOrFail($id);

    // Ambil semua tugas yang 1 grup (waktu & deskripsi sama)
    $tugasmingguan = Tugasmingguan::where('waktu_tugas', $target->waktu_tugas)
        ->where('deskripsi', $target->deskripsi)
        ->get();

    $datatugasmingguan = DataTugasMingguan::all();

    return view('back.tugasmingguan.edit', compact('tugasmingguan', 'datatugasmingguan', 'target'));
}

 public function updatetugasmingguan(Request $request, $id)
{
    $request->validate([
        'data_tugas_mingguan' => 'required|array',
        'data_tugas_mingguan.*' => 'exists:data_tugas_mingguan,id',
        'waktu_tugas' => 'required|date_format:H:i',
        'deskripsi' => 'required|string|min:3|max:255',
    ]);

    // Ambil salah satu entry lama (untuk tahu waktu_tugas & deskripsi lama)
    $target = Tugasmingguan::findOrFail($id);

    // Hapus semua tugas lama dalam 1 grup
    Tugasmingguan::where('waktu_tugas', $target->waktu_tugas)
        ->where('deskripsi', $target->deskripsi)
        ->delete();

    // Simpan ulang berdasarkan checkbox terpilih
   foreach ($request->data_tugas_mingguan as $id_tugas) {
    Tugasmingguan::create([
        'data_tugas_mingguan' => $id_tugas,
        'waktu_tugas' => $request->waktu_tugas,
        'deskripsi' => $request->deskripsi,
    ]);
}


    return redirect()->route('tugasmingguan')->with('success', 'Data berhasil diperbarui.');
}


    public function deletetugasmingguan($id)
{
    $data = Tugasmingguan::findOrFail($id);
    $data->delete();

    return redirect()->route('tugasmingguan')->with('success', 'Data berhasil dihapus');
}

     
}

    
    

