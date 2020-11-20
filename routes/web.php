<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
  Route::get('users', [UserController::class,'index'])->name('users.index')->middleware('permission:user.index');  

  Route::get('users/create', [UserController::class,'create'])->name('users.create')->middleware('permission:user.create');  
  
  Route::get('users/store', [UserController::class,'store'])->name('users.store')->middleware('permission:user.store');  
});
