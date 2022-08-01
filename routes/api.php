<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OpportunityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::prefix('auth')->group(function(){
    //api/auth/register
    Route::post('/register', [AuthController::class,'register']);
    Route::post('/login', [AuthController::class,'login']);
    Route::get('/logout', [AuthController::class,'logout'])->middleware('auth:api');
    Route::get('/user', [AuthController::class,'user'])->middleware('auth:api');
    Route::get('authentication-failed', [AuthController::class,'authFailed'])->name('auth-failed');

});


    Route::get('opportunities',[OpportunityController::class,'index']);
