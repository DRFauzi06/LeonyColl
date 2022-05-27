<?php

namespace App\Http\Controllers;

use App\Models\baju;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\kode;


class BajuController extends Controller
{
    public function index(){
        $list =  baju::select("*")
                        ->orderBy("kodeBaju","asc")
                        ->get();
 
        // $data = baju::all();
        // $kode = kode::all();
        $result = kode::with('bajus')->get();
        return view('databaju',compact('list','result'));
    }
    public function insertdata(Request $request){

        
        $data = Baju::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotoBaju/',$request->file('foto')->getClientOriginalName());
            $data->foto=$request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('baju')->with('success','Data telah disimpan');
    }

    public function jenisBaju(Request $request){
        $data = baju::where('kodeBaju',$request->id)->first();
        return response()->json($data);
        
    }
    public function tampildata(Request $request,$id){
        $data = baju::find($id);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotoBaju/',$request->file('foto')->getClientOriginalName());
            $data->foto=$request->file('foto')->getClientOriginalName();
            $data->save();
        }
        // dd($data);
        // return redirect()->route('baju')->with('success','Data telah diupdate');
        return view('edit.edit',compact('data'));
    }
    public function update(Request $request,$id){
        $data = baju::find($id);
        $data->update($request->all());
        return redirect()->route('baju')->with('success','Data telah diupdate'); 
    }

    public function delete($id){
        $data = baju::find($id);
        $data->delete();
        return redirect()->route('baju')->with('success','Data telah dihapus'); 
    }
}
