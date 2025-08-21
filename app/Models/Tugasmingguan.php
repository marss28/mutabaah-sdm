<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tugasmingguan extends Model
{
    protected $table = 'tugas_mingguan';
    protected $fillable =['user_id', 'datatugasmingguan_id', 'waktu_tugas', 'deskripsi'];
    protected $guarded = ['id'];

    public function datatugas()
    {
        return $this->belongsTo(DataTugasMingguan::class, 'datatugasmingguan_id');
    }

    public function datatugasmingguan()
    {
        return $this->belongsTo(DataTugasMingguan::class, 'datatugasmingguan_id');
    }
}
