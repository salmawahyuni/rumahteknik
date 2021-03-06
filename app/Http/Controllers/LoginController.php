<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function halamanlogin(){
        return view('Login.login-pengguna');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/Dashboard');
        }
        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function registrasi(){
        return view('Login.registrasi');
    }

    public function simpanregistrasi(Request $request){
        User::create([
            'name' => $request->name,
            'level' => 'mahasiswa',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return back()->with('succes', 'Register Berhasil!');
    }
}
