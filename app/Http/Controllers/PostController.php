<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MOdels\Order;

class PostController extends Controller
{
    //
    public function index()
    {
       return "hello";
    }
    public function orderpost()
    {
        $users = Order::all();
        //$users = User::where('name',"Tafsir Rahman")->get();

    	return response()->json($users);
    }
}
