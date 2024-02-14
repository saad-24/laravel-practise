<?php

use Illuminate\Support\Facades\Route;
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
    return view('home');
})->name('home')->middleware('auth');

Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');

Route::get('/signup', function () {
    return view('signup');
})->name('signup')->middleware('guest');

//Route::post('/login', function () {
//    return view('login');
//});


Route::post('/login', [UserController::class, 'login'])->middleware('guest');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

use App\Http\Controllers\AuthController;

//Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [UserController::class, 'signup'])->middleware('guest');

