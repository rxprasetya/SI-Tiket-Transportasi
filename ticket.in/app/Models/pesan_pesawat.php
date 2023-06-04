<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesan_pesawat extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tiket_pesawat()
    {
        return $this->belongsTo('App\Models\tiket_pesawat', 'id_tiket_pesawat', 'id');
    }
}
