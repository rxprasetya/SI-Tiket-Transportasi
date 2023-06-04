<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(){
        $data = pegawai::where('nama_pegawai', 'LIKE', '%'.request()->search.'%')->orWhere('username_pegawai', 'LIKE', '%'.request()->search.'%')->get();
        return view('Admins/Pegawais/pegawai', compact('data'));
    }
    
    public function add(){
        return view('Admins/Pegawais/addpegawai');
    }

    public function insertdata(Request $request){
        pegawai::create($request->all());
        return redirect()->route('pegawai');
    }

    public function readdata($id){
        $data = pegawai::find($id);
        return view('Admins/Pegawais/updatepegawai' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = pegawai::find($id);
        $data->update($request->all());
        return redirect()->route('pegawai');
    }

    public function deletedata($id){
        $data = pegawai::find($id);
        $data->delete();
        return redirect()->route('pegawai');
    }

    public function exportpdf(){
        $data = pegawai::all();
        $PDF = PDF::loadView('Admins/Pegawais/reportpegawai', array('data' => $data));
        return $PDF->stream('data-pegawai.pdf');
    }
}