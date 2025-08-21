<?php

namespace App\Http\Controllers;

use App\Models\Tugasmingguan;
use App\Models\DataTugasMingguan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TugasmingguanController extends Controller
{
    // Menampilkan daftar tugas mingguan
    public function index(){
        $tugasmingguan = Tugasmingguan::paginate(5);
        return view('back.tugasmingguan.index',compact('tugasmingguan'));
    }

    // Menampilkan form tambah data
    public function formtugasmingguan()
    {
        $datatugasmingguan = DataTugasMingguan::all();
        $selected = []; // saat create belum ada yang dipilih
        return view('back.tugasmingguan.tambah', compact('datatugasmingguan', 'selected'));
    }

    // Menyimpan data baru
    public function storetugasmingguan(Request $request)
    {
        $request->validate([
            'datatugasmingguan_id' => 'required|array|exists:datatugasmingguan,id',
            'waktu_tugas' => 'required|date_format:H:i',
            'deskripsi' => 'required|string|min:3|max:255',
        ]);

        // Simpan dalam satu baris saja
        Tugasmingguan::create([
            'user_id' => Auth::id(),
            'datatugasmingguan_id' => implode(',', $request->datatugasmingguan_id), // simpan array jadi string
            'waktu_tugas' => $request->waktu_tugas,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('tugasmingguan')->with('success', 'Data berhasil ditambahkan.');
    }

    // Menampilkan form edit data
    public function edittugasmingguan($id)
    {
        $target = Tugasmingguan::findOrFail($id);

        // pecah string menjadi array untuk ditampilkan di checkbox
        $selected = explode(',', $target->datatugasmingguan_id);

        $datatugasmingguan = DataTugasMingguan::all();

        return view('back.tugasmingguan.edit', compact('datatugasmingguan', 'selected', 'target'));
    }

    // Memperbarui data
    public function updatetugasmingguan(Request $request, $id)
    {
        $request->validate([
            'datatugasmingguan_id' => 'required|array|exists:datatugasmingguan,id',
            'waktu_tugas' => 'required|date_format:H:i',
            'deskripsi' => 'required|string|min:3|max:255',
        ]);

        $target = Tugasmingguan::findOrFail($id);

        // Update data (satu baris saja)
        $target->update([
            'user_id' => Auth::id(),
            'datatugasmingguan_id' => implode(',', $request->datatugasmingguan_id),
            'waktu_tugas' => $request->waktu_tugas,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('tugasmingguan')->with('success', 'Data berhasil diperbarui.');
    }

    // Menghapus data
    public function deletetugasmingguan($id)
    {
        $data = Tugasmingguan::findOrFail($id);
        $data->delete();

        return redirect()->route('tugasmingguan')->with('success', 'Data berhasil dihapus.');
    }
}
