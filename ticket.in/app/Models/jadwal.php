<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function jadwal_untuk(){
        // lokasi, foreign(relation table), primary key(main table)
        return $this->belongsTo('App\Models\jadwal_untuk', 'id_jadwal_untuk', 'id');
    }
}
