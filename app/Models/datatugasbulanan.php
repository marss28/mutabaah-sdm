<?php

namespace App\Models;

use App\Models\tugasbulanan;
use Illuminate\Database\Eloquent\Model;

class DataTugasBulanan extends Model
{
    protected $table = 'datatugasbulanans';
    protected $filable = ('nama_tugas');

    // public function tugasbulanan(){
    //     return $this->hasMany(tugasbulanan::class);

    protected $fillable = ['datatugasbulanan'];

        public function tugasbulanan()
        {
            return $thid->belongsTo(tugasbulanan::class, 'tugasbulanan_id');
        }
    }
// }
