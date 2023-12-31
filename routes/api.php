<?php

use App\Http\Controllers\ApiPendidikanController;
use App\Http\Controllers\AuthController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('/register', 'API\Auth\AuthController@register');
// Route::post('/login', 'API\Auth\AuthController@login');
Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class,'login']);

// Route::group(['middleware'=> 'auth'], function () {
    Route::get('api_pendidikan',[ApiPendidikanController::class,'getAll']);
    Route::get('api_pendidikan/{id}',[ApiPendidikanController::class,'getPen']);
    Route::post('api_pendidikan',[ApiPendidikanController::class,'createPen']);
    Route::put('api_pendidikan/{id}',[ApiPendidikanController::class,'updatePen']);
    Route::delete('api_pendidikan/{id}',[ApiPendidikanController::class,'deletePen']);
    // Route::get('api_pendidikan','ApiPendidikanController@getAll');
    // Route::get('api_pendidikan','ApiPendidikanController@getPen');
    // Route::post('api_pendidikan/','ApiPendidikanController@createPen');
    // Route::put('api_pendidikan/{id}','ApiPendidikanController@updatePen');
    // Route::delete('api_pendidikan/{id}','ApiPendidikanController@deletePen');
// });
