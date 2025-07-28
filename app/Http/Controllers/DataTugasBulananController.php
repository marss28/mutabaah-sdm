<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DataTugasBulananController;

class DataTugasBulananController extends Controller
{
    public function index()
{

    $tugasbulanan = TugasBulanan::with('dataTugasBulanan')->latest()->get();
    return view('back.dashboard.tugas_bulanan.tugas_bulanan', compact('tugas'));

}

    public function create()
    {
        return view('back.datatugasbulanan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'datatugasbulanan' => 'required|string|max:255'
        ]);

        kategori::create([
            $datatugasbulanan => $request->datatugasbulanan
        ]);

        return redirect()->route('datatugasbulanan')->with('success', 'data tugas bulanan berhasil ditambahkan');
        
    }

    public function edit($id)
    {
        $datatugasbulanan = datatugasbulanan::findOrFail($id);
        return view('back.datatugasbulanan.edit', compact('datatugasbulanan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'datatugasbulanan' => 'required|string|max:255',
        ]);

        $datatugasbulanan = datatugasbulanan::findOrFail($id);
        $datatugasbulanan->update([
           ' datatugasbulanan' => $request->datatugasbulanan,
        ]);

        return redirect()->route('datatugasbulanan')->with('success', 'data tugas bulanan berhasil diupdate');
    }


    public function destroy($id)
    {
        $datattugasbulanan = datatugasbulanan::findOrFail($id);
        $datatugasbulanan->delete();

        return redirect()->route('datatugasbulanan')->with('success', 'data berhasil dihapus');
    }
}
