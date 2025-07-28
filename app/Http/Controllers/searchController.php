<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\search;
use App\Models\bannerinfo;
use App\Models\Tugasharian;
use App\Models\tugasbulanan;
use Illuminate\Http\Request;
use App\Models\Tugasmingguan;

class searchController extends Controller
{
     public function search(Request $request)
    {
        $q = $request->input('q');

        $tugasHarian = Tugasharian::where('nama_tugas', 'like', "%{$q}%")->get();
        $tugasMingguan = Tugasmingguan::where('judul', 'like', "%{$q}%")->get();
        $tugasBulanan = Tugasbulanan::where('judul', 'like', "%{$q}%")->get();
        $banners = bannerinfo::where('judul', 'like', "%{$q}%")->get();
        $users = User::where('name', 'like', "%{$q}%")->orWhere('email', 'like', "%{$q}%")->get();

        return view('back.tugassearch', compact(
            'q', 'tugasHarian', 'tugasMingguan', 'tugasBulanan', 'banners', 'users'
        ));
    }

}
