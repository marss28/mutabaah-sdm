<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tugasmingguan extends Model
{
    protected $table = 'tugas_mingguan';
    protected $fillable =['data_tugas_mingguan','waktu_tugas','deskripsi'];
}
