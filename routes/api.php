<?php

use App\Http\Controllers\Api\auth\LoginController;
use App\Http\Controllers\Api\User\CurrentUserController;
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



Route::post('/login',[LoginController::class,'login']);

Route::middleware('auth:api')->prefix('v1')->group(function(){
    Route::get('/currentUser',[CurrentUserController::class,'currentUser']);
});
