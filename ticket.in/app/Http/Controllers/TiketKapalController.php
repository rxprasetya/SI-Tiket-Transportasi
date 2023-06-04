<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use App\Models\kapal;
use App\Models\kota;
use App\Models\tiket_kapal;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class TiketKapalController extends Controller
{
    public function index()
    {
        $data = tiket_kapal::where('id', 'LIKE', '%'.request()->search.'%')->get();
        return view('Admins/Kapals/tiketkapal', compact('data'));
    }

    public function add(){
        $data_kapal = kapal::get();
        $data_jadwal = jadwal::get();
        $data_kota_asal = kota::get();
        $data_kota_tujuan = kota::get();
        return view('Admins/Kapals/addtiketkapal', compact('data_kapal', 'data_jadwal', 'data_kota_asal', 'data_kota_tujuan'));
    }

    public function insertdata(Request $request){
        tiket_kapal::create($request->all());
        return redirect()->route('tiketkapal');
    }

    public function readdata($id){
        $data = tiket_kapal::find($id);
        $data_kapal = kapal::get();
        $data_jadwal = jadwal::get();
        $data_kota_asal = kota::get();
        $data_kota_tujuan = kota::get();
        return view('Admins/Kapals/updatetiketkapal' , compact('data', 'data_kapal', 'data_jadwal', 'data_kota_asal', 'data_kota_tujuan'));
    }

    public function updatedata(Request $request, $id){
        $data = tiket_kapal::find($id);
        $data->update($request->all());
        return redirect()->route('tiketkapal');
    }

    public function deletedata($id){
        $data = tiket_kapal::find($id);
        $data->delete();
        return redirect()->route('tiketkapal');
    }

    public function exportpdf(){
        $data = tiket_kapal::all();
        $PDF = PDF::loadView('Admins/Kapals/reporttiketkapal', array('data' => $data));
        return $PDF->stream('data-tiket-kapal.pdf');
    }
}
