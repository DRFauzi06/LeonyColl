<?php

namespace App\Http\Controllers;

use App\Models\baju;
use App\Models\kode;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts(){
        $list =  baju::select("*")
                        ->orderBy("kodeBaju","asc")
                        ->get();
 
        // $data = baju::all();
        // $kode = kode::all();
        $result = kode::with('bajus')->get();
        return view('posts',compact('list','result'));
        
    }
}
