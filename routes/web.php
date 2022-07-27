<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;

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

//Clear config cache:
// Route::get('/config-cache', function() {
//     $exitCode = Artisan::call('config:cache');
//     return 'Config cache cleared';
// });

// Clear application cache:
// Route::get('/clear-cache', function() {
//     $exitCode = Artisan::call('cache:clear');
//     return 'Application cache cleared';
// });

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/about', [LandingController::class, 'about']);
Route::get('/employees', [LandingController::class, 'employees']);
Route::post('/send-booking', [LandingController::class, 'sendCallback']);
//Route::post('/cal', [BookingController::class, 'index']);


//Auth::routes();

//Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('home');
