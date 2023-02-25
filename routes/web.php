<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
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
Route::get('/login',[LoginController::class,'index']);
Route::get('/api/login',[LoginController::class,'login'])->middleware('web','throttle:login', 'verified', 'csrf');

// Routes for requests coming from a different port
Route::group(['middleware' => ['web', 'cors'], 'namespace' => 'Api'], function () {
    Route::post('/api/login', [LoginController::class, 'login']);
});
Route::post('formSubmit','PostController@formSubmit');