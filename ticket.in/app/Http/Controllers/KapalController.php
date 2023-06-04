<?php

namespace App\Http\Controllers;

use App\Models\kapal;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class KapalController extends Controller
{
    public function index(){
        $data = kapal::where('nama_kapal', 'LIKE', '%'.request()->search.'%')->get();
        return view('Admins/Kapals/kapal', compact('data'));
    }

    public function add(){
        return view('Admins/Kapals/addkapal');
    }

    public function insertdata(Request $request){
        kapal::create($request->all());
        return redirect()->route('kapal');
    }

    public function readdata($id){
        $data = kapal::find($id);
        return view('Admins/Kapals/updatekapal' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = kapal::find($id);
        $data->update($request->all());
        return redirect()->route('kapal');
    }

    public function deletedata($id){
        $data = kapal::find($id);
        $data->delete();
        return redirect()->route('kapal');
    }

    public function exportpdf(){
        $data = kapal::all();
        $PDF = PDF::loadView('Admins/Kapals/reportkapal', array('data' => $data));
        return $PDF->stream('data-kapal.pdf');
    }
}
