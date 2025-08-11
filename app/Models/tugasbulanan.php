<?php

namespace App\Models;


use App\Models\DataTugasBulanan;
use Illuminate\Database\Eloquent\Model;

class tugasbulanan extends Model
{
    protected $table = 'tugasbulanan';
    protected $fillable = ['waktu_tugas', 'deskripsi', 'datatugasbulanan_id'];
     protected $guarded = ['id'];

   public function datatugasbulanan()
    {
        return $this->belongsTo(DataTugasBulanan::class, 'datatugasbulanan');
    }
}
