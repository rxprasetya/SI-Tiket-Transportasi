<?php

namespace App\Http\Controllers;

use App\Models\maskapai;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class MaskapaiController extends Controller
{
    public function index(){
        $data = maskapai::where('nama_maskapai', 'LIKE', '%'.request()->search.'%')->get();
        return view('Admins/Pesawats/pesawat', compact('data'));
    }

    public function add(){
        return view('Admins/Pesawats/addpesawat');
    }

    public function insertdata(Request $request){
        maskapai::create($request->all());
        return redirect()->route('pesawat');
    }

    public function readdata($id){
        $data = maskapai::find($id);
        return view('Admins/Pesawats/updatepesawat' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = maskapai::find($id);
        $data->update($request->all());
        return redirect()->route('pesawat');
    }

    public function deletedata($id){
        $data = maskapai::find($id);
        $data->delete();
        return redirect()->route('pesawat');
    }

    public function exportpdf(){
        $data = maskapai::all();
        $PDF = PDF::loadView('Admins/Pesawats/reportpesawat', array('data' => $data));
        return $PDF->stream('data-pesawat.pdf');
    }
}
