<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataTugasMingguan extends Model
{
    // kasih nama tabel yang sesuai dengan database kamu
    protected $table = 'datatugasmingguan';

    protected $fillable = ['nama_tugas'];

     public function Tugasmingguan()
    {
        return $this->hasMany(Tugasmingguan::class);
    }
}


