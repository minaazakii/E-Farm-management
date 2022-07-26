<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\SatelliteController;

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

Route::get('/test',[SatelliteController::class,'test'])->name('test');
Route::view('/','loginReg')->name('login.index');


//User Routes
Route::POST('/user/store',[UserController::class,'store'])->name('user.store');
Route::POST('/home',[UserController::class,'login'])->name('login');
Route::GET('/logout',[UserController::class,'logout'])->name('logout');
Route::POST('/google/login',[UserController::class,'googleLogin'])->name('google.login');
Route::GET('/analyze',[UserController::class,'analyze'])->name('analyze');


Route::middleware('loggedin')->group(function()
{
    //dashboard Routes
Route::GET('/dashboard',[DashboardController::class,'index'])->name('dashboard.index');


//sensor Routes
Route::GET('/sensor',[SensorController::class,'index'])->name('sensor.index');

//tasks Routes
Route::GET('/tasks',[TaskController::class,'index'])->name('task.index');
Route::GET('/tasksDetails/{id}',[TaskController::class,'taskDetailsIndex'])->name('taskDetails.index');
Route::POST('/store/tasksDetails/{id}',[TaskController::class,'storeTaskDetail'])->name('taskDetails.store');
Route::POST('/tasks/store',[TaskController::class,'store'])->name('task.store');


//Satellite Routes
Route::GET('/satellite',[SatelliteController::class,'index'])->name('satellite.index');
Route::GET('/satellite/map',[SatelliteController::class,'map'])->name('satellite.map');
Route::POST('/satellite/map',[SatelliteController::class,'saveCoordinate'])->name('satellite.saveCoordinate');
Route::GET('/satellite/lands',[SatelliteController::class,'landShow'])->name('satellite.landShow');
Route::GET('/satellite/lands/{id}',[SatelliteController::class,'landDetail'])->name('satellite.landDetail');
Route::GET('sat/test',[SatelliteController::class,'test']);

//marktet Routes

Route::get('/market',[MarketController::class,'start'])->name('market.start');

});




