<?php

namespace App\Http\Controllers;

use App\Models\kota;
use App\Models\jadwal;
use App\Models\kereta;
use App\Models\tiket_kereta;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class TiketKeretaController extends Controller
{
    public function index()
    {
        $data = tiket_kereta::where('id', 'LIKE', '%'.request()->search.'%')->get();
        return view('Admins/Keretas/tiketkereta', compact('data'));
    }

    public function add(){
        $data_kereta = kereta::get();
        $data_jadwal = jadwal::get();
        $data_kota_asal = kota::get();
        $data_kota_tujuan = kota::get();
        return view('Admins/Keretas/addtiketkereta', compact('data_kereta', 'data_jadwal', 'data_kota_asal', 'data_kota_tujuan'));
    }

    public function insertdata(Request $request){
        tiket_kereta::create($request->all());
        return redirect()->route('tiketkereta');
    }

    public function readdata($id){
        $data = tiket_kereta::find($id);
        $data_kereta = kereta::get();
        $data_jadwal = jadwal::get();
        $data_kota_asal = kota::get();
        $data_kota_tujuan = kota::get();
        return view('Admins/Keretas/updatetiketkereta' , compact('data', 'data_kereta', 'data_jadwal', 'data_kota_asal', 'data_kota_tujuan'));
    }

    public function updatedata(Request $request, $id){
        $data = tiket_kereta::find($id);
        $data->update($request->all());
        return redirect()->route('tiketkereta');
    }

    public function deletedata($id){
        $data = tiket_kereta::find($id);
        $data->delete();
        return redirect()->route('tiketkereta');
    }

    public function exportpdf(){
        $data = tiket_kereta::all();
        $PDF = PDF::loadView('Admins/Keretas/reporttiketkereta', array('data' => $data));
        return $PDF->stream('data-tiket-kereta.pdf');
    }
}
