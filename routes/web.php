<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PengalamanKerjaController;
use App\Http\Middleware\CheckAge;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cobaController;
use App\Http\Controllers\UserProfileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['auth']], function(){
    Route::get('/', function () {
        return view('welcome');
    });
    Route::resource('dashboard', DashboardController::class);
    Route::resource('pengalamankerja', PengalamanKerjaController::class);
    Route::resource('pendidikan', PendidikanController::class);
});
// Route::resource('/pengalamankerja', PengalamanKerjaController::class);

// Route::resource('user/profile', 'UserProfileController');
// Route::resource('/user/profile', UserProfileController::class);
// Route::get('/coba1', [cobaController::class, 'index'])->name('tugas');


Auth::routes();

    // 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('admin/profile', function (){
//     // 
// })->middleware(CheckAge::class);