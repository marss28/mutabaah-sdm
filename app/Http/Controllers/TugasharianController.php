<?php

namespace App\Http\Controllers;

use App\Models\Tugasharian;
use App\Models\Datatugasharian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TugasharianController extends Controller
{
    // Menampilkan daftar tugas harian
    public function index()
    {
        $tugasharian = Tugasharian::paginate(5);
        return view('back.tugasharian.index', compact('tugasharian'));
    }

    // Menampilkan form tambah data
    public function formtugasharian()
    {
        $datatugasharian = Datatugasharian::all();
        $selected = []; // saat create belum ada yang dipilih
        return view('back.tugasharian.tambah', compact('datatugasharian', 'selected'));
    }

    // Menyimpan data baru
    public function storetugasharian(Request $request)
    {
        $request->validate([
            'datatugasharian_id' => 'required|array|exists:datatugasharian,id',
            'waktu_tugas' => 'required|date_format:H:i',
            'deskripsi' => 'required|string|min:3|max:255',
        ]);

        Tugasharian::create([
            'user_id' => Auth::id(),
            'datatugasharian_id' => implode(',', $request->datatugasharian_id), // simpan gabungan
            'waktu_tugas' => $request->waktu_tugas,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('tugasharian')->with('success', 'Data berhasil ditambahkan.');
    }

    // Menampilkan form edit data
    public function edittugasharian($id)
    {
        $target = Tugasharian::findOrFail($id);

        // Pecah datatugasharian_id yang sudah tersimpan (string "1,2,3") jadi array
        $selected = explode(',', $target->datatugasharian_id);

        $datatugasharian = Datatugasharian::all();

        return view('back.tugasharian.edit', compact('datatugasharian', 'selected', 'target'));
    }

    // Memperbarui data
    public function updatetugasharian(Request $request, $id)
    {
        $request->validate([
            'datatugasharian_id' => 'required|array|exists:datatugasharian,id',
            'waktu_tugas' => 'required|date_format:H:i',
            'deskripsi' => 'required|string|min:3|max:255',
        ]);

        $target = Tugasharian::findOrFail($id);

        $target->update([
            'user_id' => Auth::id(),
            'datatugasharian_id' => implode(',', $request->datatugasharian_id), // update gabungan
            'waktu_tugas' => $request->waktu_tugas,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('tugasharian')->with('success', 'Data berhasil diperbarui.');
    }

    // Menghapus data
    public function deletetugasharian($id)
    {
        $data = Tugasharian::findOrFail($id);
        $data->delete();

        return redirect()->route('tugasharian')->with('success', 'Data berhasil dihapus.');
    }
}
