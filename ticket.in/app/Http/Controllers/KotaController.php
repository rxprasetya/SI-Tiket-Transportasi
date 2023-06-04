<?php

namespace App\Http\Controllers;

use App\Models\kota;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class KotaController extends Controller
{
    public function index(){
        $data = kota::where('nama_kota', 'LIKE', '%'.request()->search.'%')->get();
        return view('Admins/Kotas/kota', compact('data'));
    }

    public function add(){
        return view('Admins/Kotas/addkota');
    }

    public function insertdata(Request $request){
        kota::create($request->all());
        return redirect()->route('kota');
    }

    public function readdata($id){
        $data = kota::find($id);
        return view('Admins/Kotas/updatekota' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = kota::find($id);
        $data->update($request->all());
        return redirect()->route('kota');
    }

    public function deletedata($id){
        $data = kota::find($id);
        $data->delete();
        return redirect()->route('kota');
    }

    public function exportpdf(){
        $data = kota::all();
        $PDF = PDF::loadView('Admins/Kotas/reportkota', array('data' => $data));
        return $PDF->stream('data-kota.pdf');
    }
}
