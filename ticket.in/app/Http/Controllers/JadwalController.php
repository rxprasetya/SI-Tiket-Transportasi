<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\jadwal;
use App\Models\jadwal_untuk;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $data = jadwal::where('id', 'LIKE', '%'.request()->search.'%')->get();
        return view('Admins/Jadwals/jadwal', compact('data'));
    }

    public function add(){
        $data = jadwal_untuk::get();
        return view('Admins/Jadwals/addjadwal', compact('data'));
    }

    public function insertdata(Request $request){
        jadwal::create($request->all());
        return redirect()->route('jadwal');
    }

    public function readdata($id){
        $data = jadwal::find($id);
        $data_untuk = jadwal_untuk::get();
        // return dd($data);
        return view('Admins/Jadwals/updatejadwal' , compact('data', 'data_untuk'));
    }

    public function updatedata(Request $request, $id){
        $data = jadwal::find($id);
        $data->update($request->all());
        return redirect()->route('jadwal');
    }

    public function deletedata($id){
        $data = jadwal::find($id);
        $data->delete();
        return redirect()->route('jadwal');
    }

    public function exportpdf(){
        $data = jadwal::all();
        $PDF = PDF::loadView('Admins/Jadwals/reportjadwal', array('data' => $data));
        return $PDF->stream('data-jadwal.pdf');
    }
}