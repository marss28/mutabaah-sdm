<?php

namespace App\Http\Controllers;

use App\Models\Tugasharian;
use Illuminate\Http\Request;

class TugasharianController extends Controller
{
     public function index(){
        $tugasharian = Tugasharian::paginate(5);
        return view('back.tugasharian.index',compact('tugasharian'));
    }


    public function formtugasharian(){
        return view('back.tugasharian.tambah');
     }


     public function storetugasharian(Request $request)
{
    $request->validate([
        'data_tugas_harian' => 'required|string',
        'waktu_tugas' => 'required|date_format:H:i',
        'deskripsi' => 'required|string|min:3|max:255',
    ]);

    // lanjut simpan data ke database
        $data = $request->all();
        Tugasharian::create($data);

        return redirect()->route('tugasharian')->with('success','Data Berhasil Ditambahkan');
     }


     public function edittugasharian($id)
    {
        $data = Tugasharian::findOrFail($id);
        return view('back.tugasharian.edit', compact('data'));
    }




    public function updatetugasharian(Request $request, $id)
{
    $request->validate([
        'data_tugas_harian' => 'required|string',
        'waktu_tugas' => 'required|date_format:H:i',
        'deskripsi' => 'required|string|min:3|max:255',
    ]);

    $data = Tugasharian::findOrFail($id);

    $data->update([
        'data_tugas_harian' => $request->data_tugas_harian,
        'waktu_tugas' => $request->waktu_tugas,
        'deskripsi' => $request->deskripsi,
    ]);

    return redirect()->route('tugasharian')->with('success', 'Data berhasil diperbarui.');
}


    public function deletetugasharian($id)
{
    $data = Tugasharian::findOrFail($id);
    $data->delete();

    return redirect()->route('tugasharian')->with('success', 'Data berhasil dihapus');
}


}
