<?php

namespace App\Models;

use App\Models\tugasbulanan;
use App\Models\DataTugasBulanan;
use Illuminate\Database\Eloquent\Model;

class tugasbulanan extends Model
{
    protected $table = 'tugasbulanan';
    protected $fillable = ['data_tugas_bulanan','waktu_tugas','deskripsi'];
     protected $guarded = ['id'];

   public function datatugasbulanan()
    {
        return $this->hasMany(datatugasbulanan::class);
    }
}
