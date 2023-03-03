<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MOdels\Order;

class OrdersController extends Controller
{
    public function index()
    {
       $csrf_token = csrf_token();
       return $csrf_token;
    }

    public function orders(Request $request)
    {   
        //return "hello";
        $order = new Order;
        try {
            $order->name = $request->input('name');
            $order->order = $request->input('order');
            $order->total = $request->input('total');
            $order->save();
            return response()->json(['success' => true, 'message' => 'Order sent successful']);
        } 
        catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error saving order: ' . $e->getMessage()]);
        }
    }
}
