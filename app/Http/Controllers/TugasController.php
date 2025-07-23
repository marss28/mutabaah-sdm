<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use App\Models\bannerinfo;
use App\Models\tugasbulanan;
use Illuminate\Http\Request;
use App\Models\Tugasmingguan;

class TugasController extends Controller
{
    public function search(Request $request)
{
    $keyword = $request->keyword;

    // $tugasHarian = TugasHarian::where('judul', 'like', "%$keyword%")
    //                 ->orWhere('deskripsi', 'like', "%$keyword%")->get();

    $Tugasmingguan = Tugasmingguan::where('data_tugas_mingguan', 'like', "%$keyword%")
                    ->orWhere('deskripsi', 'like', "%$keyword%")->get();

    $tugasBulanan = tugasbulanan::where('judul', 'like', "%$keyword%")
                    ->orWhere('deskripsi', 'like', "%$keyword%")->get();

    $banners = bannerinfo::where('nama_banner', 'like', "%$keyword%")->get();

    return view('back.tugassearch', compact('tugasHarian', 'tugasMingguan', 'tugasBulanan', 'banners', 'keyword'));
}

}
