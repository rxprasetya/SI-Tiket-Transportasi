<?php

namespace App\Http\Controllers;

use App\Models\pesan_pesawat;
use App\Models\tiket_pesawat;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PesanPesawatController extends Controller
{
    public function index()
    {
        $data = pesan_pesawat::where('id', 'LIKE', '%'.request()->search.'%')->get();
        return view('Admins/Pesawats/orderpesawat', compact('data'));
    }

    public function add(){
        $data_tiket = tiket_pesawat::get();
        return view('Admins/Pesawats/addorderpesawat', compact('data_tiket'));
    }

    public function insertdata(Request $request){
        pesan_pesawat::create($request->all());
        return redirect()->route('orderpesawat');
    }

    public function readdata($id){
        $data = pesan_pesawat::find($id);
        $data_tiket = tiket_pesawat::get();
        return view('Admins/Pesawats/updateorderpesawat' , compact('data', 'data_tiket'));
    }

    public function updatedata(Request $request, $id){
        $data = pesan_pesawat::find($id);
        $data->update($request->all());
        return redirect()->route('orderpesawat');
    }

    public function deletedata($id){
        $data = pesan_pesawat::find($id);
        $data->delete();
        return redirect()->route('orderpesawat');
    }

    public function exportpdf(){
        $data = pesan_pesawat::all();
        $PDF = PDF::loadView('Admins/Pesawats/reportorderpesawat', array('data' => $data));
        return $PDF->stream('data-tiket-pesawat.pdf');
    }
}
