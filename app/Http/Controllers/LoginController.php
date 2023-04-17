<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function formlogin(){
        return view('Login.login-aplikasi');
    }

    public function postlogin(Request $Request){
        if(Auth::attempt($Request->only('username', 'password'))){
            return redirect('/home');
        }
        return redirect('/login_petugas')->with('error', 'Tolong masukan data yang benar!');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login_petugas');
       }
}
