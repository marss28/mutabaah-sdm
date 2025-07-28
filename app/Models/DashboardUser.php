<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DashboardUser extends Model
{
     protected $table = 'dashboard_user';


    public function tugasHarian()
    {
        return $this->belongsTo(Tugasharian::class, 'tugasharian_id');
    }

    public function tugasMingguan()
    {
        return $this->belongsTo(Tugasmingguan::class, 'tugasmingguan_id');
    }

    public function tugasBulanan()
    {
        return $this->belongsTo(tugasbulanan::class, 'tugasbulanan_id');
    }

    public function bannerInfo()
    {
        return $this->belongsTo(bannerinfo::class, 'bannerinfo_id');
    }
}
