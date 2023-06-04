<?php

namespace App\Http\Controllers;

use App\Models\pesan_kapal;
use App\Models\tiket_kapal;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PesanKapalController extends Controller
{
    public function index()
    {
        $data = pesan_kapal::where('id', 'LIKE', '%'.request()->search.'%')->get();
        return view('Admins/Kapals/orderkapal', compact('data'));
    }

    public function add(){
        $data_tiket = tiket_kapal::get();
        return view('Admins/Kapals/addorderkapal', compact('data_tiket'));
    }

    public function insertdata(Request $request){
        pesan_kapal::create($request->all());
        return redirect()->route('orderkapal');
    }

    public function readdata($id){
        $data = pesan_kapal::find($id);
        $data_tiket = tiket_kapal::get();
        return view('Admins/Kapals/updateorderkapal' , compact('data', 'data_tiket'));
    }

    public function updatedata(Request $request, $id){
        $data = pesan_kapal::find($id);
        $data->update($request->all());
        return redirect()->route('orderkapal');
    }

    public function deletedata($id){
        $data = pesan_kapal::find($id);
        $data->delete();
        return redirect()->route('orderkapal');
    }

    public function exportpdf(){
        $data = pesan_kapal::all();
        $PDF = PDF::loadView('Admins/Kapals/reportorderkapal', array('data' => $data));
        return $PDF->stream('data-tiket-kapal.pdf');
    }
}
