<?php


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;

use App\Http\Controllers\CheckEmailController;

use App\Http\Controllers\CreateUserController;

use App\Http\Controllers\VerifyCodeController;
use App\Http\Controllers\NewPasswordController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\Api\auth\LoginController;
use App\Http\Controllers\Escorts\EscortController;
use App\Http\Controllers\Api\User\LogoutController;
use App\Http\Controllers\Api\List\ListSkinController;
use App\Http\Controllers\Api\List\ListTownController;
use App\Http\Controllers\Api\List\ListShapeController;
use App\Http\Controllers\Api\List\ListEthnicController;
use App\Http\Controllers\Api\List\ListHeightController;
use App\Http\Controllers\Api\List\ListWeightController;
use App\Http\Controllers\Api\List\ListServiceController;
use App\Http\Controllers\Api\User\CurrentUserController;
use App\Http\Controllers\Api\List\ListQuaterByTownController;
use App\Http\Controllers\Api\List\ListAdsCategoryController;
use App\Http\Controllers\Api\Escort\ProfileCompleteController;
use App\Http\Controllers\Api\Ads\CreateAdsController;
use App\Http\Controllers\Api\Ads\CreateImageAdsController;
use App\Http\Controllers\Api\Escort\AttachEscortServiceController;
use App\Http\Controllers\Api\Escort\EscortIsCompletedOrNotController;
use App\Http\Controllers\Api\List\ListQuestionController;
use App\Http\Controllers\Api\User\ChoiceQuestionController;
use App\Http\Controllers\Api\User\VerifyQuestionController;

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

Route::get('/list/categories',[ListAdsCategoryController::class,'list']);
Route::get('/list/ethnics',[ListEthnicController::class,'list']);
Route::get('/list/skinColor',[ListSkinController::class,'list']);
Route::get('/list/towns',[ListTownController::class,'list']);
Route::get('/list/quarterByTown/{id}',[ListQuaterByTownController::class,'list']);
Route::get('/list/shape',[ListShapeController::class,'list']);
Route::get('/list/height',[ListHeightController::class,'list']);
Route::get('/list/weight',[ListWeightController::class,'list']);
Route::get('/list/services',[ListServiceController::class,'list']);

Route::get('/test', function(Request $request){
    return "From the API";
});

Route::get('question/{id}',[ListQuestionController::class,'filter']);
// SEARCH GROUP ROUTES
Route::prefix('search')->group(function(){


});


// ESCORTS GROUP ROUTES
Route::apiResource('/escorts', EscortController::class);

// ANNOUNCEMENT GROUP ROUTES
Route::post('/ads', [CreateAdsController::class, 'createAds']);
Route::post('/ads/image', [CreateImageAdsController::class, 'createImages']);
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
    Route::get('/questions',[ListQuestionController::class,'list']);
});


//User Group route
Route::post('/user', [CreateUserController::class, 'createUser']);
Route::post('/verify/phone',[VerifyQuestionController::class,'verify']);


Route::post('/login',[LoginController::class,'login']);

// endpoint simple user
Route::middleware('auth:api')->prefix('v1')->group(function(){
    Route::get('/currentUser',[CurrentUserController::class,'currentUser']);
    Route::post('/choice/questions',[ChoiceQuestionController::class,'choice']);

    Route::post('/logout',[LogoutController::class,'logout']);
});

//route admin
Route::middleware(['auth:api','scopes:admin'])->prefix('v1')->group(function(){

});

//routes escort
Route::middleware(['auth:api','scopes:escort'])->prefix('v1')->group(function(){

    Route::post('/addProfile',[ProfileCompleteController::class,'addProfile']);
    Route::post('/attach/services',[AttachEscortServiceController::class,'attach']);
    Route::get('/CompleteOrNot',[EscortIsCompletedOrNotController::class,"isCompletedOrNot"]);
});


//routes escort
Route::middleware(['auth:api','scopes:customer'])->prefix('v1')->group(function(){

});
