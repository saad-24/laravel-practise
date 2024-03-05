<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminPropertyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PropertyDetailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PayPalController;
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
    Route::get('/rewards', [FrontController::class, 'Rewards'])->name('crowd.rewards');
    Route::get('/portfolio', [FrontController::class, 'Portfolio'])->name('crowd.portfolio');
    Route::post('/cart/add/{property}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'index'])->name('crowd.cart');
    Route::get('/wallet', [FrontController::class, 'Wallet'])->name('crowd.wallet');
    //paypal
    Route::get('/create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');
    Route::get('/process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction');
    Route::get('/success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction');
    Route::get('/cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');

    Route::get('/about', [FrontController::class, 'About'])->name('crowd.about');
    Route::get('/golden_visa', [FrontController::class, 'Golden'])->name('crowd.golden_visa');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});

Route::middleware('admin')->group(function () {
    // Admin routes here
    Route::any('/admin', [UserController::class, 'userProperties'])->name('admin.home');
    Route::get('/admin/properties', [FrontController::class, 'properties'])->name('admin_properties');
    Route::post('/admin/property', [AdminPropertyController::class, 'store'])->name('admin.property.store');
    Route::get('/admin/property', [FrontController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/properties/{property}/edit', [AdminPropertyController::class, 'edit'])->name('admin.property.edit');
    Route::put('/admin/properties/{property}', [AdminPropertyController::class, 'update'])->name('admin.property.update');
    Route::delete('/admin/properties/{property}', [AdminPropertyController::class, 'destroy'])->name('admin.property.destroy');
    // Route::post('/admin/properties/{property}/move-to-funded', [AdminPropertyController::class, 'moveToFunded'])->name('properties.move-to-funded');
});
