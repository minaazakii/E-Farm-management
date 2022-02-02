<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\DashboardController;


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

Route::view('/','loginReg')->name('index');
Route::get('/test',[UserController::class,'test'])->name('test');

//User Routes
Route::POST('/user/store',[UserController::class,'store'])->name('user.store');
Route::POST('/home',[UserController::class,'login'])->name('login');



//dashboard Routes
Route::GET('/dashboard',[DashboardController::class,'index'])->name('dashboard.index');


//sensor Routes
Route::GET('/sensor',[SensorController::class,'index'])->name('sensor.index');

//tasks Routes
Route::GET('/tasks',[TaskController::class,'index'])->name('task.index');
Route::GET('/tasksDetails/{id}',[TaskController::class,'taskDetailsIndex'])->name('taskDetails.index');
Route::POST('/store/tasksDetails/{id}',[TaskController::class,'storeTaskDetail'])->name('taskDetails.store');
Route::POST('/tasks/store',[TaskController::class,'store'])->name('task.store');





