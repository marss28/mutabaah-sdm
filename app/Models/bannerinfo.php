<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bannerinfo extends Model
{
    protected $table = 'bannerinfo';

    protected $fillable = ['nama_banner', 'foto'];
}
