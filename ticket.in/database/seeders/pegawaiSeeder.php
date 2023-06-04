<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawais')->insert([
            'id_pegawai' => 'P001',
            'nama_pegawai' => 'Rafid',
            'username_pegawai' => 'rxprasetya',
            'password_pegawai' => '123',
            'jabatan' => 'Pegawai',
        ]);
    }
}
