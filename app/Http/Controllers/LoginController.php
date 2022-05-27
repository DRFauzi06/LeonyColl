<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function logincek(Request $request){
        // dd($request->all());
        if(Auth::attempt($request->only('name','password'))){
            return redirect('baju');
        }
        return redirect('login');

    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function register(){
        return view('register');
    }
    public function registerup(Request $request){
        // dd($request->all());
        User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' =>bcrypt($request->password),
            'remember_token' =>Str::random(60)
        ]);
        // $data->password = bcrypt('$data->password');
        // $data->save();

        return redirect()->route('login');

    }
}
