<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tugasharian extends Model
{
    protected $table = 'tugas_harian';
    protected $fillable =['user_id', 'datatugasharian_id', 'waktu_tugas', 'deskripsi'];
    protected $guarded = ['id'];

    public function datatugasharian()
    {
        return $this->belongsTo(datatugasharian::class, 'datatugasharian_id', 'id');
    }

}
