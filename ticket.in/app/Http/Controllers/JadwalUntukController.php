<?php

namespace App\Http\Controllers;

use App\Models\jadwal_untuk;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class JadwalUntukController extends Controller
{
    public function index(){
        $data = jadwal_untuk::where('nama_jadwal_untuk', 'LIKE', '%'.request()->search.'%')->get();
        return view('Admins/Jadwals/jenisjadwal', compact('data'));
    }

    public function add(){
        return view('Admins/Jadwals/addjenisjadwal');
    }

    public function insertdata(Request $request){
        jadwal_untuk::create($request->all());
        return redirect()->route('jenisjadwal');
    }

    public function readdata($id){
        $data = jadwal_untuk::find($id);
        return view('Admins/Jadwals/updatejenisjadwal' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = jadwal_untuk::find($id);
        $data->update($request->all());
        return redirect()->route('jenisjadwal');
    }

    public function deletedata($id){
        $data = jadwal_untuk::find($id);
        $data->delete();
        return redirect()->route('jenisjadwal');
    }

    public function exportpdf(){
        $data = jadwal_untuk::all();
        $PDF = PDF::loadView('Admins/Jadwals/reportjenisjadwal', array('data' => $data));
        return $PDF->stream('data-jenisjadwal.pdf');
    }
}
