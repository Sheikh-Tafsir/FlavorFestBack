<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
       return "hello";
    }
    public function formsubmit(Request $request)
    {
    	return response()->json([$request->all()]);
    }
}
