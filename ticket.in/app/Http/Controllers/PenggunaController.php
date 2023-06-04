<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index(){
        $data = pengguna::where('nama_pengguna', 'LIKE', '%'.request()->search.'%')->get();
        return view('Admins/Penggunas/pengguna', compact('data'));
    }

    public function add(){
        return view('Admins/Penggunas/addpengguna');
    }

    public function insertdata(Request $request){
        pengguna::create($request->all());
        return redirect()->route('pengguna');
    }

    public function readdata($id){
        $data = pengguna::find($id);
        return view('Admins/Penggunas/updatepengguna' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = pengguna::find($id);
        $data->update($request->all());
        return redirect()->route('pengguna');
    }

    public function deletedata($id){
        $data = pengguna::find($id);
        $data->delete();
        return redirect()->route('pengguna');
    }

    public function exportpdf(){
        $data = pengguna::all();
        $PDF = PDF::loadView('Admins/Penggunas/reportpengguna', array('data' => $data));
        return $PDF->stream('data-pengguna.pdf');
    }
}
