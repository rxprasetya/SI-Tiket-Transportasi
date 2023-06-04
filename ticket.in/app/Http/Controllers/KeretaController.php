<?php

namespace App\Http\Controllers;

use App\Models\kereta;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class KeretaController extends Controller
{
    public function index(){
        $data = kereta::where('nama_kereta', 'LIKE', '%'.request()->search.'%')->get();
        return view('Admins/Keretas/kereta', compact('data'));
    }

    public function add(){
        return view('Admins/Keretas/addkereta');
    }

    public function insertdata(Request $request){
        kereta::create($request->all());
        return redirect()->route('kereta');
    }

    public function readdata($id){
        $data = kereta::find($id);
        return view('Admins/Keretas/updatekereta' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = kereta::find($id);
        $data->update($request->all());
        return redirect()->route('kereta');
    }

    public function deletedata($id){
        $data = kereta::find($id);
        $data->delete();
        return redirect()->route('kereta');
    }

    public function exportpdf(){
        $data = kereta::all();
        $PDF = PDF::loadView('Admins/Keretas/reportkereta', array('data' => $data));
        return $PDF->stream('data-kereta.pdf');
    }
}
