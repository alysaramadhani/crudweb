<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
         return view('login.index',[
            "tittle" => "login",
           
        ]);
    }



public function auth(Request $requet)
{
    $credentials = $request->validate([
        'email' => 'required|email:dns',
        'password' => 'required'
    ]);

    if(Auth::attempt($credentials)){
        $request->session()->regenerate();
        return redirect()->intended('/home');
    }
    return back()->with('loginEror', 'Login gagal !');
}


}
