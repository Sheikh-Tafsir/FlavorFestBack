<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\MOdels\User;

class SignupController extends Controller
{
   //
   public function index()
   {
       $csrf_token = csrf_token();
       return $csrf_token;
   }

   public function signup(Request $request)
   {       
        $user = new User;
        try {
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = $request->input('password');
            $user->save();
            return response()->json(['success' => true, 'message' => 'User created successfully']);
        } 
        catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error creating user: ' . $e->getMessage()]);
        }
   }
}
