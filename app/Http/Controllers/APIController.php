<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sampah;
use Illuminate\Support\Facades\Input;

class APIController extends Controller
{
    //
    public function input(Request $request){
        $input = in_array(NULL, $request->all());
        if($input == FALSE ){
            $insert = Sampah::insert(
                [
                    'nama' => Input::get('nama'),
                    'kategori' => Input::get('kategori')
                ]);
            $result="success";
        }else{
            $result="failed";
        }
        return response()->json([
            'status' => $result
        ]);
            
    }
    public function getAll(){
        $result = Sampah::all();
        return response()->json($result);
    }
    public function getSpecific($id){
        $query = Sampah::where('id',$id)->get()->first();
        if($query){
            $result=$query;
        }else{
            $result=["status"=>"Not Found"];
        }
        return response()->json($result);
    }
    public function delete($id){
        $query = Sampah::where('id',$id)->delete();
        if($query){
            $result="success";
        }else{
            $result="Not Found";
        }
        return response()->json([
            'status' => $result
        ]);
    }
}
