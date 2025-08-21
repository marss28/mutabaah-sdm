<?php

namespace App\Exports;

use App\Models\Tugasbulanan;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class TugasBulananSheetExport implements FromCollection, WithHeadings, WithTitle
{
    public function collection()
    {
       return DB::table('tugasbulanan as th')
    ->select(
        'th.id',
        'th.waktu_tugas',
        'th.deskripsi',
        DB::raw("GROUP_CONCAT(dt.tugas_bulanan SEPARATOR ', ') as tugas_bulanan")
    )
    ->leftJoin('datatugasbulanans as dt', DB::raw("FIND_IN_SET(dt.id, th.datatugasbulanan_id)"), ">", DB::raw("0"))
    ->groupBy('th.id', 'th.waktu_tugas', 'th.deskripsi')
    ->get()
    ->map(function ($t) {
        return [
            'Nama Tugas' => $t->tugas_bulanan ?? '-',
            'Waktu'      => $t->waktu_tugas,
            'Deskripsi'  => $t->deskripsi,
        ];
    });
    }

    public function headings(): array
    {
        return ['Nama Tugas', 'Waktu', 'Deskripsi'];
    }

    public function title(): string
    {
        return 'Tugas Bulanan';
    }
}
