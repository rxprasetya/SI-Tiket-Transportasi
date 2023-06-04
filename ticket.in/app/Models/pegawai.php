<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;

    // protected $fillable = ['id_pegawai','nama_pegawai','username_pegawai','password_pegawai','jabatan'];
    protected $guarded = [];
}
