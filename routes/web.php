<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminPropertyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PropertyDetailController;
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


Route::middleware('guest')->group(function () {
    // Guest routes here
    Route::post('/signup', [UserController::class, 'signup'])->middleware('guest');
    Route::post('/login', [UserController::class, 'login'])->middleware('guest');
    Route::get('/signup', [FrontController::class, 'Signup'])->name('signup');
    Route::get('/login', [FrontController::class, 'Login'])->name('login');
});

Route::middleware('auth')->group(function () {
    // Auth routes here
    Route::any('/', [UserController::class, 'userProperties'])->name('crowd');
    Route::get('/property_detail/{id}', [PropertyDetailController::class, 'show'])->name('property_detail');
    Route::post('/properties/{property}/pay', [PaymentController::class, 'pay'])->name('properties.pay');
    Route::get('/properties', [FrontController::class, 'properties'])->name('front.properties');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});

Route::middleware('admin')->group(function () {
    // Admin routes here
    Route::post('/admin/property', [AdminPropertyController::class, 'store'])->name('admin.property.store');
    Route::get('/admin/property', [FrontController::class, 'AdminDashboard']);
    Route::get('/admin/properties', [AdminPropertyController::class, 'dashboard'])->name('admin.property.dashboard');
    Route::get('/admin/properties/{property}/edit', [AdminPropertyController::class, 'edit'])->name('admin.property.edit');
    Route::put('/admin/properties/{property}', [AdminPropertyController::class, 'update'])->name('admin.property.update');
    Route::delete('/admin/properties/{property}', [AdminPropertyController::class, 'destroy'])->name('admin.property.destroy');
    Route::post('/admin/properties/{property}/move-to-funded', [AdminPropertyController::class, 'moveToFunded'])->name('properties.move-to-funded');
});
