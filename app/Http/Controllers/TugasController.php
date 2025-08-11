<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TugasHarian;
use App\Models\TugasMingguan;
use App\Models\TugasBulanan;
use Spatie\SimpleExcel\SimpleExcelWriter;

class TugasController extends Controller
{
    public function exportSemua()
    {
        $filepath = storage_path('app/public/tugas_semua.csv');

        // Ambil semua data
        $harian   = TugasHarian::with('datatugasharian')->get();
        $mingguan = TugasMingguan::with('datatugasmingguan')->get();
        $bulanan  = TugasBulanan::with('datatugasbulanan')->get();
        

        // Buat writer dan header standar
        // Buat writer dan header standar DENGAN TITIK KOMA
        $writer = SimpleExcelWriter::create($filepath, delimiter: ';')
            ->addHeader([
            'Jenis Tugas',
            'Nama Tugas',
            'Waktu Tugas',
            'Deskripsi'
    ]);


        // Tambah data harian
        foreach ($harian as $t) {
            $writer->addRow([
                'Jenis Tugas' => 'Harian',
                'Nama Tugas'  => $t->datatugasharian->nama_tugas ?? '',
                'Waktu Tugas' => $t->waktu_tugas,
                'Deskripsi'   => $t->deskripsi ?? '',
            ]);
        }

        // Tambah data mingguan
        foreach ($mingguan as $t) {
            $writer->addRow([
                'Jenis Tugas' => 'Mingguan',
                'Nama Tugas'  => $t->datatugasmingguan->nama_tugas ?? '',
                'Waktu Tugas' => $t->waktu_tugas,
                'Deskripsi'   => $t->deskripsi ?? '',
            ]);
        }

        // Tambah data bulanan
        foreach ($bulanan as $t) {
            $writer->addRow([
                'Jenis Tugas' => 'Bulanan',
                'Nama Tugas'  => $t->datatugasbulanan->nama_tugas ?? '',
                'Waktu Tugas' => $t->waktu_tugas,
                'Deskripsi'   => $t->deskripsi ?? '',
            ]);
        }

        $writer->close();

        return response()->download($filepath)->deleteFileAfterSend(true);


        
    }
}
