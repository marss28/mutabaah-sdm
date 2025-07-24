<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class datatugasharian extends Model
{
    protected $table = 'datatugasharian';
    protected $fillable = ['nama_tugas'];

    public function Tugasharian()
    {
        return $this->hasMany(Tugasharian::class);
    }
}
