<?php

namespace App\Http\Controllers;

use App\Models\Tugasharian;
use Illuminate\Http\Request;
use App\Models\datatugasharian;


    // Menampilkan daftar tugas harian
   class TugasharianController extends Controller
{
    public function index()
    {
        // Ambil data tugas harian langsung dari model datatugasharian
        $datatugasharian = datatugasharian::paginate(5);

        // Kirim ke view dengan nama variabel yang sama
        return view('back.tugasharian.index', compact('datatugasharian'));
    }

    // Menampilkan form tambah data
    public function formtugasharian()
    {
        $datatugasharian = datatugasharian::all();
        return view('back.tugasharian.tambah', compact('datatugasharian'));
    }

    // Menyimpan data baru
    public function storetugasharian(Request $request)
    {
        $request->validate([
            'datatugasharian_id' => 'required|exists:datatugasharian,id',
            'waktu_tugas' => 'required|date_format:H:i',
            'deskripsi' => 'required|string|min:3|max:255',
        ]);

        Tugasharian::create([
            'datatugasharian_id' => $request->datatugasharian_id,
            'waktu_tugas' => $request->waktu_tugas,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('tugasharian')->with('success', 'Data berhasil ditambahkan.');
    }

    // Menampilkan form edit data
    public function edittugasharian($id)
    {
        $data = Tugasharian::findOrFail($id);
        $datatugasharian = datatugasharian::all();
        return view('back.tugasharian.edit', compact('data', 'datatugasharian'));
    }

    // Memperbarui data
    public function updatetugasharian(Request $request, $id)
    {
        $request->validate([
            'datatugasharian_id' => 'required|exists:datatugasharian,id',
            'waktu_tugas' => 'required|date_format:H:i',
            'deskripsi' => 'required|string|min:3|max:255',
        ]);

        $data = Tugasharian::findOrFail($id);

        $data->update([
            'datatugasharian_id' => $request->datatugasharian_id,
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
