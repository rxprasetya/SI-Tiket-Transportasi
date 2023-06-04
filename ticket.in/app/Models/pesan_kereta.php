<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesan_kereta extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tiket_kereta()
    {
        return $this->belongsTo('App\Models\tiket_kereta', 'id_tiket_kereta', 'id');
    }
}
