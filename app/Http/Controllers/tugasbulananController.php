<?php

namespace App\Http\Controllers;

use App\Models\tugasbulanan;
use App\Models\datatugasbulanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class tugasbulananController extends Controller
{
   public function index()
    {
        $tugasbulanan = tugasbulanan::paginate(5);
        return view('back.tugas_bulanan.tugas_bulanan', compact('tugasbulanan'));
    }

    // Menampilkan form tambah data
    public function formtugasbulanan()
    {
        $datatugasbulanan = datatugasbulanan::all();
        $selected = []; // saat create belum ada yang dipilih
        return view('back.tugas_bulanan.create', compact('datatugasbulanan', 'selected'));
    }

    // Menyimpan data baru
    public function storetugasbulanan(Request $request)
    {
        $request->validate([
            'datatugasbulanan_id' => 'required|array|exists:datatugasbulanans,id',
            'waktu_tugas' => 'required|date_format:H:i',
            'deskripsi' => 'required|string|min:3|max:255',
        ]);

        tugasbulanan::create([
            'user_id' => Auth::id(),
            'datatugasbulanan_id' => implode(',', $request->datatugasbulanan_id), // simpan gabungan
            'waktu_tugas' => $request->waktu_tugas,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('tugasbulanan')->with('success', 'Data berhasil ditambahkan.');
    }

    // Menampilkan form edit data
    public function edittugasbulanan($id)
    {
        $target = tugasbulanan::findOrFail($id);

        // Pecah datatugasharian_id yang sudah tersimpan (string "1,2,3") jadi array
        $selected = explode(',', $target->datatugasbulanan_id);

        $datatugasbulanan = datatugasbulanan::all();

        return view('back.tugas_bulanan.edit', compact('datatugasbulanan', 'selected', 'target'));
    }

    // Memperbarui data
    public function updatetugasbulanan(Request $request, $id)
    {
        $request->validate([
            'datatugasbulanan_id' => 'required|array|exists:datatugasbulanans,id',
            'waktu_tugas' => 'required|date_format:H:i',
            'deskripsi' => 'required|string|min:3|max:255',
        ]);

        $target = tugasbulanan::findOrFail($id);

        $target->update([
            'user_id' => Auth::id(),
            'datatugasbulanan_id' => implode(',', $request->datatugasbulanan_id), // update gabungan
            'waktu_tugas' => $request->waktu_tugas,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('tugasbulanan')->with('success', 'Data berhasil diperbarui.');
    }

    // Menghapus data
    public function deletetugasbulanan($id)
    {
        $data = tugasbulanan::findOrFail($id);
        $data->delete();

        return redirect()->route('tugasbulanan')->with('success', 'Data berhasil dihapus.');
    }
}
