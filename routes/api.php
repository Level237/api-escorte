<?php


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;

use App\Http\Controllers\CreateUserController;

use App\Http\Controllers\Escorts\EscortController;

use App\Http\Controllers\VerifyCodeController;
use App\Http\Controllers\CheckEmailController;
use App\Http\Controllers\NewPasswordController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\Api\auth\LoginController;
use App\Http\Controllers\Api\User\LogoutController;
use App\Http\Controllers\Api\User\CurrentUserController;
use App\Http\Controllers\Api\Escort\ProfileCompleteController;
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

// SEARCH GROUP ROUTES
Route::prefix('search')->group(function(){


});


// ESCORTS GROUP ROUTES
Route::get('/escorts',[EscortController::class, 'indexWithTownName']);
Route::get('/escorts/{id}',[EscortController::class, 'show']);

// ANNOUNCEMENT GROUP ROUTES
Route::get('/announcements', [AnnouncementController::class, 'index']);
Route::get('/announcements/{id}', [AnnouncementController::class, 'show']);
Route::post('/announcements', [AnnouncementController::class, 'store']);
Route::put('/announcements/{id}', [AnnouncementController::class, 'update']);
Route::delete('/announcements/{id}', [AnnouncementController::class, 'delete']);
Route::get('/announcementsTown',[AnnouncementController::class, 'getAnnouncesByTown']);
// Route::get('/announcementsTown',function(){
//     return 'API here';
// });




Route::post('checkemail',[CheckEmailController::class,'Checkemail']);
Route::post('verifycode', [VerifyCodeController::class, 'Verifycode']);
Route::post('newpassword', [NewPasswordController:: class, 'Newpassword']);

// LISTING GROUP ROUTES
Route::prefix('list')->group(function(){

    Route::get('/locations', [LocationController::class, 'index']);
});

Route::post('/user', [CreateUserController::class, 'createUser']);



Route::post('/login',[LoginController::class,'login']);

// endpoint simple user
Route::middleware('auth:api')->prefix('v1')->group(function(){
    Route::get('/currentUser',[CurrentUserController::class,'currentUser']);
    Route::post('/logout',[LogoutController::class,'logout']);
});

//route admin
Route::middleware(['auth:api','scopes:admin'])->prefix('v1')->group(function(){

});

//routes escort
Route::middleware(['auth:api','scopes:escort'])->prefix('v1')->group(function(){

Route::post('/addProfile',[ProfileCompleteController::class,'addProfile']);

});

//routes escort
Route::middleware(['auth:api','scopes:customer'])->prefix('v1')->group(function(){

});
