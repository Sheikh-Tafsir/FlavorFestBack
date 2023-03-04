<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\OrdersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});
Route::get('/demo',function(){
    echo "helo";
});
Route::get('/api/csrf-token', function () {
    //return csrf_token();
    /*return response()->json([
        'csrfToken' => csrf_token(),
    ]);*/
    return "1234";
});
//Route::get('/api/login',[LoginController::class,'index']);
Route::post('/api/login',[LoginController::class,'login']);//->middleware('web', 'cors', 'throttle:login', 'verified', 'csrf');

//Route::get('/api/signup',[SignupController::class,'index']);
Route::post('/api/signup',[SignupController::class,'signup']);//->middleware('web','throttle:login', 'verified', 'csrf');

//Route::get('/api/orders',[OrdersController::class,'index']);
Route::post('/api/orders',[OrdersController::class,'orders']);//->middleware('web','throttle:login', 'verified', 'csrf');
// Routes for requests coming from a different port

Route::get('/api/post',[PostController::class,'orderpost']);
// Route::group(['middleware' => ['web', 'cors', 'throttle:login', 'verified'], 'namespace' => 'Api'], function () {
//     Route::post('/api/login', [LoginController::class, 'login']);
//     Route::post('/api/signup', [SignupController::class, 'signup']);
//     //Route::post('/api/orders', [OrdersController::class, 'orders']);
// });

// Route::get('/formsubmit',[PostController::class, 'index']);
// Route::post('/formsubmit',[PostController::class, 'formsubmit']);