<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        $csrf_token = csrf_token();
        return $csrf_token;
    }

    public function login(Request $request)
    {
        $credentials = $request->only('name', 'password');
        //echo "<pre>";
        //print_r($request->all());
        $name = $request->input('name');
        $password = $request->input('password');
        print_r($name);
        $request->session()->regenerate();
        //return response()->json(['success' => true]);
        return "1";
    }
}
