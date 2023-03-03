<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// Route::get('/items', function(Request $request) {
//     $data = [
//         [
//             "id" => 7,
//             "name" => "na like this",
//             "description" => "",
//             "created_at" => "2020-07-26T05:53:00.376501Z",
//             "updated_at" => "2020-07-26T05:53:00.376501Z"
//         ], [
//             "id" => 5,
//             "name" => "write a book",
//             "description" => "hohoho",
//             "created_at" => "2020-07-26T05:47:00.908706Z",
//             "updated_at" => "2020-07-26T05:53:00.376501Z"
//         ]
//     ];
//     return response()->json($data);
// });

// Route::get('/items/{id}', function(Request $request) {
//     $data = [
//         'id' => 1,
//         'name' => "Swim across the River Benue",
//         'description' => "ho ho ho",
//         'created_at' => "2020-07-26T22:31:04.49683Z",
//         'updated_at' => "2020-07-26T22:31:04.49683Z"
//     ];
//     return response()->json($data);
// });

// Route::post('/items', function(Request $request) {
//     $data = [
//         'id' => 1,
//         'name' => "Swim across the River Benue",
//         'description' => "ho ho ho",
//         'created_at' => "2020-07-26T22:31:04.49683Z",
//         'updated_at' => "2020-07-26T22:31:04.49683Z"
//     ];
//     return response()->json($data, 201);
// });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:api', 'csrf')->group(function () {
    // Your protected routes here...
    Route::post('/hogehoge', 'Controller@hogehoge');
});
// Route::middleware(['cors'])->group(function () {
//     //Route::post('/hogehoge', 'Controller@hogehoge');
//     Route::post('/login', [LoginController::class, 'login']);
//     Route::post('/signup', [LoginController::class, 'signup']);
//     Route::post('/orders', [LoginController::class, 'orders']);
// });

