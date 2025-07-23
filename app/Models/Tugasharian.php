<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tugasharian extends Model
{
    protected $table = 'tugas_harian';
    protected $fillable =['data_tugas_harian','waktu_tugas','deskripsi', 'datatugsharian_id'];
    protected $guarded = ['id'];

    public function datatugasharian()
    {
        return $this->belongsTo(datatugasharian::class, 'datatugasharian_id');
    }
}
