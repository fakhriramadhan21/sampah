<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sampah;
use Illuminate\Support\Facades\Input;

class SampahController extends Controller
{
    //
    public function input(){
        return view('input');
    }
    public function list(){
        $sampahs = Sampah::all();
        return view('data',['sampahs'=>$sampahs]);
    }
    public function proses(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|max:20',
            'kategori' => 'required'
        ]);
        Sampah::insert(
            [
                'nama' => Input::get('nama'),
                'kategori' => Input::get('kategori')
            ]);
    
        return redirect('/data');
    }
    public function delete($id){
        Sampah::where('id',$id)->delete();
        return redirect('/data')->with(['success' => 'Berhasil Menghapus Data']);
    }
}
