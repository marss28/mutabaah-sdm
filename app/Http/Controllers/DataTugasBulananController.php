<?php

namespace App\Http\Controllers;

use App\Models\tugasbulanan;
use Illuminate\Http\Request;
use App\Models\DataTugasBulanan;
use App\Http\Controllers\DataTugasBulananController;


class DataTugasBulananController extends Controller
{
    public function index()
{

    $datatugasbulanan = DataTugasBulanan::paginate(5);
    
    return view('back.data_tugas_bulanan.tugas_data_bulanan', compact('datatugasbulanan'));

}

    public function formdatatugasbulanan()
    {
        return view('back.data_tugas_bulanan.create');
    }

    public function storedatatugasbulanan(Request $request)
    {
        $request->validate([
            'tugas_bulanan' => 'required|string|max:255'
        ]);

        DataTugasBulanan::create([
            'tugas_bulanan' => $request->tugas_bulanan
        ]);

        return redirect()->route('datatugasbulanan')->with('success', 'data tugas bulanan berhasil ditambahkan');
        
    }

    public function editdatatugasbulanan($id)
    {
        $datatugasbulanan = DataTugasBulanan::findOrFail($id);
        return view('back.data_tugas_bulanan.edit', compact('datatugasbulanan'));
    }



    public function updatedatatugasbulanan(Request $request, $id)
    {
        $request->validate([
            'tugas_bulanan' => 'required|string|max:255',
        ]);

        $datatugasbulanan = DataTugasBulanan::findOrFail($id);
        $datatugasbulanan->update([
           'tugas_bulanan' => $request->tugas_bulanan,
        ]);

        return redirect()->route('datatugasbulanan')->with('success', 'data tugas bulanan berhasil diupdate');
    }


    public function deletedatatugasbulanan($id)
    {
        $datatugasbulanan = DataTugasBulanan::findOrFail($id);
        $datatugasbulanan->delete();

        return redirect()->route('datatugasbulanan')->with('success', 'data berhasil dihapus');
    }
}
