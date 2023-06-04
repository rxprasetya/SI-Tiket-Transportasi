<?php

namespace App\Http\Controllers;

use App\Models\pesan_kereta;
use App\Models\tiket_kereta;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PesanKeretaController extends Controller
{
    public function index()
    {
        $data = pesan_kereta::where('id', 'LIKE', '%'.request()->search.'%')->get();
        return view('Admins/Keretas/orderkereta', compact('data'));
    }

    public function add(){
        $data_tiket = tiket_kereta::get();
        return view('Admins/Keretas/addorderkereta', compact('data_tiket'));
    }

    public function insertdata(Request $request){
        pesan_kereta::create($request->all());
        return redirect()->route('orderkereta');
    }

    public function readdata($id){
        $data = pesan_kereta::find($id);
        $data_tiket = tiket_kereta::get();
        return view('Admins/Keretas/updateorderkereta' , compact('data', 'data_tiket'));
    }

    public function updatedata(Request $request, $id){
        $data = pesan_kereta::find($id);
        $data->update($request->all());
        return redirect()->route('orderkereta');
    }

    public function deletedata($id){
        $data = pesan_kereta::find($id);
        $data->delete();
        return redirect()->route('orderkereta');
    }

    public function exportpdf(){
        $data = pesan_kereta::all();
        $PDF = PDF::loadView('Admins/Keretas/reportorderkereta', array('data' => $data));
        return $PDF->stream('data-tiket-kereta.pdf');
    }
}
