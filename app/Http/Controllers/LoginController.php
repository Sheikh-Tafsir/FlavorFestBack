<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    

    public function index()
    {
        // $csrf_token = csrf_token();
        // return $csrf_token;
        return "hello";
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
             'name' => ['required'],
             'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
             return "1";
        }
        return "0";
        //$credentials=$request->input('name');
        //$credentials="taf";
        //return $credentials;

    }
}
