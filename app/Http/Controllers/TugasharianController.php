<?php

namespace App\Http\Controllers;

use App\Models\Tugasharian;
use App\Models\Datatugasharian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

        foreach ($request->datatugasharian_id as $id) {
            Tugasharian::create([
                'user_id' => Auth::id(),
                'datatugasharian_id' => $id,
                'waktu_tugas' => $request->waktu_tugas,
                'deskripsi' => $request->deskripsi,
            ]);
        }

        return redirect()->route('tugasharian')->with('success', 'Data berhasil ditambahkan.');
    }

    // Menampilkan form edit data
    public function edittugasharian($id)
    {
        $target = Tugasharian::findOrFail($id);

        // Ambil semua ID tugas yang punya waktu & deskripsi sama
        $selected = Tugasharian::where('waktu_tugas', $target->waktu_tugas)
            ->where('deskripsi', $target->deskripsi)
            ->pluck('datatugasharian_id')
            ->toArray();

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

        // Hapus semua tugas lama dalam grup yang sama
        Tugasharian::where('waktu_tugas', $target->waktu_tugas)
            ->where('deskripsi', $target->deskripsi)
            ->delete();

        // Simpan ulang yang dipilih
        foreach ($request->datatugasharian_id as $id_tugas) {
            Tugasharian::create([
                'user_id' => Auth::id(),
                'datatugasharian_id' => $id_tugas,
                'waktu_tugas' => $request->waktu_tugas,
                'deskripsi' => $request->deskripsi,
            ]);
        }

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
