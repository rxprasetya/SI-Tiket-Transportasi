<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiket_kapal extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function kapal()
    {
        return $this->belongsTo('App\Models\kapal','id_kapal','id');
    }

    public function jadwal()
    {
        return $this->belongsTo('App\Models\jadwal','id_jadwal','id');
    }

    public function kota_asal()
    {
        return $this->belongsTo('App\Models\kota','id_kota_asal','id');
    }

    public function kota_tujuan()
    {
        return $this->belongsTo('App\Models\kota','id_kota_tujuan','id');
    }
}
