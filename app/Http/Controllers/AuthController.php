<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    
    public function checkLogin(Request $request)
    {
        if(Auth::attempt($request->only('name','password'))){
            return redirect('/admin');
        }
        return back()->with('status','Username atau Password Salah!');
    
    }
    public function logout()
    {
        Auth::logout();
        return view('login');
    }
}
