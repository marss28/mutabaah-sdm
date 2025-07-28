<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataTugasMingguan extends Model
{
    // kasih nama tabel yang sesuai dengan database kamu
    protected $table = 'data_tugas_mingguan';

    protected $fillable = ['nama_tugas'];
}


