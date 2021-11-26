<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


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

Route::view('/','index1')->name('index');


//User Routes
Route::POST('/user/store',[UserController::class,'store'])->name('user.store');
Route::POST('/home',[UserController::class,'login'])->name('login');


//dashboard Routes
Route::GET('/dashboard',[DashboardController::class,'index'])->name('dashboard.index');






