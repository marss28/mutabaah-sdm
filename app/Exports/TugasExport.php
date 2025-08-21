<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class TugasExport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            new TugasHarianSheetExport(),
            new TugasMingguanSheetExport(),
            new TugasBulananSheetExport(),
        ];
    }
}
