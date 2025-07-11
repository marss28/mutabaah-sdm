<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tugasbulanan extends Model
{
    protected $table = 'tugasbulanan';
    protected $fillable = ['data_tugas_bulanans','waktu_tugas','deskripsi'];

    // public function Tugasbulanan(){
    //     return $this->hasMany(tugasbulanan::class);
    // }
}
