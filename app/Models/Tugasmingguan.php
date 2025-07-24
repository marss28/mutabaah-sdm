<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tugasmingguan extends Model
{
    protected $table = 'tugas_mingguan';
    protected $fillable =['data_tugas_mingguan','waktu_tugas','deskripsi'];


    public function dataTugas()
{
    return $this->belongsTo(DataTugasMingguan::class, 'data_tugas_mingguan');
}

}


