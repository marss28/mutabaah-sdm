<?php

namespace App\Http\Controllers;

use App\Exports\TugasExport;
use Maatwebsite\Excel\Facades\Excel;

class TugasController extends Controller
{
    public function export()
    {
        return Excel::download(new TugasExport, 'tugas.xlsx');
    }
}
