<?php

namespace App\Models;

use App\Models\tugasbulanan;
use Illuminate\Database\Eloquent\Model;

class datatugasbulanan extends Model
{
    protected $table = 'datatugasbulanans';

    // public function tugasbulanan(){
    //     return $this->hasMany(tugasbulanan::class);

    protected $fillable = ['tugas_bulanan'];

        public function tugasbulanan()
        {
            return $this->belongsTo(tugasbulanan::class, 'tugasbulanan_id');
        }
    }
// }
