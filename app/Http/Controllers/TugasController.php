<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function search(Request $request)
{
    $keyword = $request->keyword;

    $data = Tugas::where('data_tugas_mingguan', 'like', "%$keyword%")
                 ->orWhere('deskripsi', 'like', "%$keyword%")
                 ->get();

    return view('back.tugassearch', compact('data', 'keyword'));
}

}
