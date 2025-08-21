<?php

namespace App\Exports;

use App\Models\Tugasmingguan;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;


class TugasMingguanSheetExport implements FromCollection, WithHeadings, WithTitle
{
    public function collection()
    {
        return DB::table('tugas_mingguan as th')
        ->select(
            'th.id',
            'th.waktu_tugas',
            'th.deskripsi',
            DB::raw("GROUP_CONCAT(dt.nama_tugas SEPARATOR ', ') as nama_tugas")
        )
        ->leftJoin('datatugasmingguan as dt', DB::raw("FIND_IN_SET(dt.id, th.datatugasmingguan_id)"), ">", DB::raw("0"))
        ->groupBy('th.id', 'th.waktu_tugas', 'th.deskripsi')
        ->get()
        ->map(function ($t) {
            return [
                'Nama Tugas' => $t->nama_tugas ?? '-',
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
        return 'Tugas Mingguan';
    }
}
