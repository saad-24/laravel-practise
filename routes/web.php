<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminPropertyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PropertyController;
use App\Models\Property;
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

//Route::get('/', function () {
//    return view('crowd.index');
//})->name('crowd')->middleware('auth');

//Route::get('/', function () {
//})->name('crowd')->middleware('auth');

Route::any('/', [UserController::class, 'userProperties'])->name('crowd')->middleware('auth');

use App\Http\Controllers\PropertyDetailController;

Route::get('/property_detail/{id}', [PropertyDetailController::class, 'show'])
    ->name('property_detail')
    ->middleware('auth');

Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');

Route::get('/signup', function () {
    return view('crowd.registration');
})->name('signup')->middleware('guest');




Route::post('/login', [UserController::class, 'login'])->middleware('guest');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::post('/signup', [UserController::class, 'signup'])->middleware('guest');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');
//Route::post('/properties/{property}', function () {
//    return view('properties.payment');
//})->name('make_payment')->middleware('auth');

Route::post('/properties/{property}/pay', [PaymentController::class, 'pay'])->name('properties.pay');



Route::middleware('admin')->group(function () {
    // Admin routes here
    Route::post('/admin/property', [AdminPropertyController::class, 'store'])->name('admin.property.store');
    Route::get('/admin/property', function () {
        return view('admin.dashboard');
    });
    Route::get('/admin/properties', [AdminPropertyController::class, 'dashboard'])->name('admin.property.dashboard');
});

Route::get('/crowd-properties', function () {
    return view('crowd.properties');
})->name('crowd.property')->middleware('auth');




















