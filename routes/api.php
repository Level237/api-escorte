<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateUserController;

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

Route::get('/test', function(Request $request){
    return "From the API";
});

Route::post('/user', [CreateUserController::class, 'createUser']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
