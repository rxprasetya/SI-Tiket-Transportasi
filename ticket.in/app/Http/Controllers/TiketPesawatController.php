<?php

namespace App\Http\Controllers;

use App\Models\kota;
use App\Models\jadwal;
use App\Models\maskapai;
use Illuminate\Http\Request;
use App\Models\tiket_pesawat;
use Barryvdh\DomPDF\Facade\Pdf;

class TiketPesawatController extends Controller
{
    public function index()
    {
        $data = tiket_pesawat::where('id', 'LIKE', '%'.request()->search.'%')->get();
        return view('Admins/Pesawats/tiketpesawat', compact('data'));
    }

    public function add(){
        $data_pesawat = maskapai::get();
        $data_jadwal = jadwal::get();
        $data_kota_asal = kota::get();
        $data_kota_tujuan = kota::get();
        return view('Admins/Pesawats/addtiketpesawat', compact('data_pesawat', 'data_jadwal', 'data_kota_asal', 'data_kota_tujuan'));
    }

    public function insertdata(Request $request){
        tiket_pesawat::create($request->all());
        return redirect()->route('tiketpesawat');
    }

    public function readdata($id){
        $data = tiket_pesawat::find($id);
        $data_pesawat = maskapai::get();
        $data_jadwal = jadwal::get();
        $data_kota_asal = kota::get();
        $data_kota_tujuan = kota::get();
        return view('Admins/Pesawats/updatetiketpesawat' , compact('data', 'data_pesawat', 'data_jadwal', 'data_kota_asal', 'data_kota_tujuan'));
    }

    public function updatedata(Request $request, $id){
        $data = tiket_pesawat::find($id);
        $data->update($request->all());
        return redirect()->route('tiketpesawat');
    }

    public function deletedata($id){
        $data = tiket_pesawat::find($id);
        $data->delete();
        return redirect()->route('tiketpesawat');
    }

    public function exportpdf(){
        $data = tiket_pesawat::all();
        $PDF = PDF::loadView('Admins/Pesawats/reporttiketpesawat', array('data' => $data));
        return $PDF->stream('data-tiket-pesawat.pdf');
    }
}
