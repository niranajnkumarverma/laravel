<?php

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

    

Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('index');;

Route::get('/login',[App\Http\Controllers\HomeController::class, 'postLogin'])->name('login')->middleware('alreadyLoggedIn');
Route::post('/login-user',[App\Http\Controllers\HomeController::class, 'postLogin'])->name('login-user');

Route::get('/register',[App\Http\Controllers\HomeController::class, 'getRegister'])->name('register')->middleware('alreadyLoggedIn');
Route::post('/register-user',[App\Http\Controllers\HomeController::class, 'postRegister'])->name('register-user');

Route::get('/dashboard',[App\Http\Controllers\HomeController::class, 'dashboard'])->middleware('isLoggedIn');

Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');;
use App\Http\Controllers\Customercontroller;
 
Route::resource('customers', Customercontroller::class);


