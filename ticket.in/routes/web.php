<?php

use App\Http\Controllers\JadwalController;
use App\Http\Controllers\JadwalUntukController;
use App\Http\Controllers\KapalController;
use App\Http\Controllers\KeretaController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\MaskapaiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PesanKapalController;
use App\Http\Controllers\PesanKeretaController;
use App\Http\Controllers\PesanPesawatController;
use App\Http\Controllers\TiketKapalController;
use App\Http\Controllers\TiketKeretaController;
use App\Http\Controllers\TiketPesawatController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Dashboard
Route::get('/', function () {
    return view('welcome');
})->name('index');

// Data Masters
    // Pegawai
    Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai');

    Route::get('/pegawai/addform', [PegawaiController::class, 'add'])->name('addpegawai');

    Route::post('/pegawai/addform', [PegawaiController::class, 'insertdata'])->name('insertpegawai');

    Route::get('/pegawai/updateform/{id}', [PegawaiController::class, 'readdata'])->name('readpegawai');

    Route::post('/pegawai/updateform/{id}', [PegawaiController::class, 'updatedata'])->name('updatepegawai');

    Route::get('/pegawai/{id}', [PegawaiController::class, 'deletedata'])->name('deletepegawai');

    Route::get('/pdf-pegawai', [PegawaiController::class, 'exportpdf'])->name('pdfpegawai');

    // Pengguna
    Route::get('/pengguna', [PenggunaController::class, 'index'])->name('pengguna');

    Route::get('/pengguna/addform', [PenggunaController::class, 'add'])->name('addpengguna');

    Route::post('/pengguna/addform', [PenggunaController::class, 'insertdata'])->name('insertpengguna');

    Route::get('/pengguna/updateform/{id}', [PenggunaController::class, 'readdata'])->name('readpengguna');

    Route::post('/pengguna/updateform/{id}', [PenggunaController::class, 'updatedata'])->name('updatepengguna');

    Route::get('/pengguna/{id}', [PenggunaController::class, 'deletedata'])->name('deletepengguna');

    Route::get('/pdf-pengguna', [PenggunaController::class, 'exportpdf'])->name('pdfpengguna');

    // Kapal
    Route::get('/kapal', [KapalController::class, 'index'])->name('kapal');

    Route::get('/kapal/addform', [KapalController::class, 'add'])->name('addkapal');
    
    Route::post('/kapal/addform', [KapalController::class, 'insertdata'])->name('insertkapal');
    
    Route::get('/kapal/updateform/{id}', [KapalController::class, 'readdata'])->name('readkapal');
    
    Route::post('/kapal/updateform/{id}', [KapalController::class, 'updatedata'])->name('updatekapal');
    
    Route::get('/kapal/{id}', [KapalController::class, 'deletedata'])->name('deletekapal');
    
    Route::get('/pdf-kapal', [KapalController::class, 'exportpdf'])->name('pdfkapal');    

    // Kereta
    Route::get('/kereta', [KeretaController::class, 'index'])->name('kereta');

    Route::get('/kereta/addform', [KeretaController::class, 'add'])->name('addkereta');
    
    Route::post('/kereta/addform', [KeretaController::class, 'insertdata'])->name('insertkereta');
    
    Route::get('/kereta/updateform/{id}', [KeretaController::class, 'readdata'])->name('readkereta');
    
    Route::post('/kereta/updateform/{id}', [KeretaController::class, 'updatedata'])->name('updatekereta');
    
    Route::get('/kereta/{id}', [KeretaController::class, 'deletedata'])->name('deletekereta');
    
    Route::get('/pdf-kereta', [KeretaController::class, 'exportpdf'])->name('pdfkereta');    

    // Pesawat
    Route::get('/pesawat', [MaskapaiController::class, 'index'])->name('pesawat');

    Route::get('/pesawat/addform', [MaskapaiController::class, 'add'])->name('addpesawat');
    
    Route::post('/pesawat/addform', [MaskapaiController::class, 'insertdata'])->name('insertpesawat');
    
    Route::get('/pesawat/updateform/{id}', [MaskapaiController::class, 'readdata'])->name('readpesawat');
    
    Route::post('/pesawat/updateform/{id}', [MaskapaiController::class, 'updatedata'])->name('updatepesawat');
    
    Route::get('/pesawat/{id}', [MaskapaiController::class, 'deletedata'])->name('deletepesawat');
    
    Route::get('/pdf-pesawat', [MaskapaiController::class, 'exportpdf'])->name('pdfpesawat');

    // Kota
    Route::get('/kota', [KotaController::class, 'index'])->name('kota');

    Route::get('/kota/addform', [KotaController::class, 'add'])->name('addkota');
    
    Route::post('/kota/addform', [KotaController::class, 'insertdata'])->name('insertkota');
    
    Route::get('/kota/updateform/{id}', [KotaController::class, 'readdata'])->name('readkota');
    
    Route::post('/kota/updateform/{id}', [KotaController::class, 'updatedata'])->name('updatekota');
    
    Route::get('/kota/{id}', [KotaController::class, 'deletedata'])->name('deletekota');
    
    Route::get('/pdf-kota', [KotaController::class, 'exportpdf'])->name('pdfkota');

    // Jenis
    Route::get('/jenisjadwal', [JadwalUntukController::class, 'index'])->name('jenisjadwal');

    Route::get('/jenisjadwal/addform', [JadwalUntukController::class, 'add'])->name('addjenisjadwal');
    
    Route::post('/jenisjadwal/addform', [JadwalUntukController::class, 'insertdata'])->name('insertjenisjadwal');
    
    Route::get('/jenisjadwal/updateform/{id}', [JadwalUntukController::class, 'readdata'])->name('readjenisjadwal');
    
    Route::post('/jenisjadwal/updateform/{id}', [JadwalUntukController::class, 'updatedata'])->name('updatejenisjadwal');
    
    Route::get('/jenisjadwal/{id}', [JadwalUntukController::class, 'deletedata'])->name('deletejenisjadwal');
    
    Route::get('/pdf-jenisjadwal', [JadwalUntukController::class, 'exportpdf'])->name('pdfjenisjadwal');

    // Schedules
    Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal');

    Route::get('/jadwal/addform', [JadwalController::class, 'add'])->name('addjadwal');

    Route::post('/jadwal/addform', [JadwalController::class, 'insertdata'])->name('insertjadwal');

    Route::get('/jadwal/updateform/{id}', [JadwalController::class, 'readdata'])->name('readjadwal');

    Route::post('/jadwal/updateform/{id}', [JadwalController::class, 'updatedata'])->name('updatejadwal');

    Route::get('/jadwal/{id}', [JadwalController::class, 'deletedata'])->name('deletejadwal');

    Route::get('/pdf-jadwal', [JadwalController::class, 'exportpdf'])->name('pdfjadwal');

// Tickets
    // Kapal
    Route::get('/tiketkapal', [TiketKapalController::class, 'index'])->name('tiketkapal');

    Route::get('/tiketkapal/addform', [TiketKapalController::class, 'add'])->name('addtiketkapal');

    Route::post('/tiketkapal/addform', [TiketKapalController::class, 'insertdata'])->name('inserttiketkapal');

    Route::get('/tiketkapal/updateform/{id}', [TiketKapalController::class, 'readdata'])->name('readtiketkapal');

    Route::post('/tiketkapal/updateform/{id}', [TiketKapalController::class, 'updatedata'])->name('updatetiketkapal');

    Route::get('/tiketkapal/{id}', [TiketKapalController::class, 'deletedata'])->name('deletetiketkapal');

    Route::get('/pdf-tiketkapal', [TiketKapalController::class, 'exportpdf'])->name('pdftiketkapal');

    // Kereta
    Route::get('/tiketkereta', [TiketKeretaController::class, 'index'])->name('tiketkereta');

    Route::get('/tiketkereta/addform', [TiketKeretaController::class, 'add'])->name('addtiketkereta');

    Route::post('/tiketkereta/addform', [TiketKeretaController::class, 'insertdata'])->name('inserttiketkereta');

    Route::get('/tiketkereta/updateform/{id}', [TiketKeretaController::class, 'readdata'])->name('readtiketkereta');

    Route::post('/tiketkereta/updateform/{id}', [TiketKeretaController::class, 'updatedata'])->name('updatetiketkereta');

    Route::get('/tiketkereta/{id}', [TiketKeretaController::class, 'deletedata'])->name('deletetiketkereta');

    Route::get('/pdf-tiketkereta', [TiketKeretaController::class, 'exportpdf'])->name('pdftiketkereta');

    // Pesawat
    Route::get('/tiketpesawat', [TiketPesawatController::class, 'index'])->name('tiketpesawat');

    Route::get('/tiketpesawat/addform', [TiketPesawatController::class, 'add'])->name('addtiketpesawat');

    Route::post('/tiketpesawat/addform', [TiketPesawatController::class, 'insertdata'])->name('inserttiketpesawat');

    Route::get('/tiketpesawat/updateform/{id}', [TiketPesawatController::class, 'readdata'])->name('readtiketpesawat');

    Route::post('/tiketpesawat/updateform/{id}', [TiketPesawatController::class, 'updatedata'])->name('updatetiketpesawat');

    Route::get('/tiketpesawat/{id}', [TiketPesawatController::class, 'deletedata'])->name('deletetiketpesawat');

    Route::get('/pdf-tiketpesawat', [TiketPesawatController::class, 'exportpdf'])->name('pdftiketpesawat');


// Orders
    //Kapal
    Route::get('/orderkapal', [PesanKapalController::class, 'index'])->name('orderkapal');

    Route::get('/orderkapal/addform', [PesanKapalController::class, 'add'])->name('addorderkapal');

    Route::post('/orderkapal/addform', [PesanKapalController::class, 'insertdata'])->name('insertorderkapal');

    Route::get('/orderkapal/updateform/{id}', [PesanKapalController::class, 'readdata'])->name('readorderkapal');

    Route::post('/orderkapal/updateform/{id}', [PesanKapalController::class, 'updatedata'])->name('updateorderkapal');

    Route::get('/orderkapal/{id}', [PesanKapalController::class, 'deletedata'])->name('deleteorderkapal');

    Route::get('/pdf-orderkapal', [PesanKapalController::class, 'exportpdf'])->name('pdforderkapal');

    // Kereta
    Route::get('/orderkereta', [PesanKeretaController::class, 'index'])->name('orderkereta');

    Route::get('/orderkereta/addform', [PesanKeretaController::class, 'add'])->name('addorderkereta');

    Route::post('/orderkereta/addform', [PesanKeretaController::class, 'insertdata'])->name('insertorderkereta');

    Route::get('/orderkereta/updateform/{id}', [PesanKeretaController::class, 'readdata'])->name('readorderkereta');

    Route::post('/orderkereta/updateform/{id}', [PesanKeretaController::class, 'updatedata'])->name('updateorderkereta');

    Route::get('/orderkereta/{id}', [PesanKeretaController::class, 'deletedata'])->name('deleteorderkereta');

    Route::get('/pdf-orderkereta', [PesanKeretaController::class, 'exportpdf'])->name('pdforderkereta');

    // Pesawat
    Route::get('/orderpesawat', [PesanPesawatController::class, 'index'])->name('orderpesawat');

    Route::get('/orderpesawat/addform', [PesanPesawatController::class, 'add'])->name('addorderpesawat');

    Route::post('/orderpesawat/addform', [PesanPesawatController::class, 'insertdata'])->name('insertorderpesawat');

    Route::get('/orderpesawat/updateform/{id}', [PesanPesawatController::class, 'readdata'])->name('readorderpesawat');

    Route::post('/orderpesawat/updateform/{id}', [PesanPesawatController::class, 'updatedata'])->name('updateorderpesawat');

    Route::get('/orderpesawat/{id}', [PesanPesawatController::class, 'deletedata'])->name('deleteorderpesawat');

    Route::get('/pdf-orderpesawat', [PesanPesawatController::class, 'exportpdf'])->name('pdforderpesawat');
