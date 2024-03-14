<?php

use App\Http\Controllers\CurrencyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminPropertyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PropertyDetailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\WalletTransactionController;
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
    Route::post('/signup', [UserController::class, 'signup']);
    Route::post('/login', [UserController::class, 'login']);
    Route::get('/signup', [FrontController::class, 'Signup'])->name('signup');
    Route::get('/login', [FrontController::class, 'Login'])->name('login');
});

Route::middleware('auth')->group(function () {
    // Auth routes here
    Route::any('/', [UserController::class, 'userProperties'])->name('crowd');
    Route::get('/property_detail/{id}', [PropertyDetailController::class, 'show'])->name('property_detail');
    Route::any('/properties/pay', [PaymentController::class, 'pay'])->name('properties.pay');
    // Route::get('/properties/pay', [PaymentController::class, 'index'])->name('custom');
    Route::get('/profile', [FrontController::class, 'userDashboard'])->name('front.dashboard');
    Route::get('/preference', [FrontController::class, 'preference'])->name('front.preference');
    Route::get('/account', [FrontController::class, 'account'])->name('front.account');
    Route::get('/properties', [FrontController::class, 'properties'])->name('front.properties');
    Route::get('/rewards', [FrontController::class, 'Rewards'])->name('crowd.rewards');
    Route::get('/portfolio', [FrontController::class, 'Portfolio'])->name('crowd.portfolio');
    Route::post('/cart/add/{property}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'index'])->name('crowd.cart');
    Route::get('/checkout', [FrontController::class, 'checkout'])->name('checkout');
    Route::get('/wallet', [FrontController::class, 'Wallet'])->name('crowd.wallet');
    Route::get('/add_card', [FrontController::class, 'addCard'])->name('crowd.card');
    Route::post('/save-card', [CardController::class, 'saveCard'])->name('save-card');
    Route::get('/edit-card/{id}', [CardController::class, 'edit'])->name('edit-card');
    Route::put('/update-card/{id}', [CardController::class, 'update'])->name('update-card');
    Route::any('/delete-card/{id}', [CardController::class, 'destroy'])->name('delete-card');

    Route::post('/set-currency', [CurrencyController::class, 'setCurrency'])->name('set.currency');

    //paypal
    Route::get('/create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');
    Route::get('/process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction');
    Route::get('/success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction');
    Route::get('/cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');

    //stripe
    Route::get('/charge', [StripeController::class, 'index'])->name('stripe');
    Route::post('/charge', [StripeController::class, 'charge'])->name('stripe-payment');

    Route::get('/about', [FrontController::class, 'About'])->name('crowd.about');
    Route::get('/golden_visa', [FrontController::class, 'Golden'])->name('crowd.golden_visa');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/wallet/deposit', [WalletTransactionController::class, 'depositForm'])->name('wallet');
    Route::post('/wallet/deposit', [WalletTransactionController::class, 'deposit'])->name('wallet.deposit');

    Route::get('/wallet/withdraw', [WalletTransactionController::class, 'withdrawForm'])->name('withdraw');
    Route::post('/wallet/withdraw', [WalletTransactionController::class, 'withdraw'])->name('wallet.withdraw');
    Route::any('/wallet-pay', [WalletTransactionController::class, 'withdrawCart'])->name('cart.withdraw');
    Route::any('/wallet-error', [WalletTransactionController::class, 'withdrawError'])->name('withdraw.error');
    Route::any('/wallet-success', [WalletTransactionController::class, 'withdrawSuccess'])->name('withdraw.success');
});

Route::middleware('admin')->prefix('admin')->group(function () {
    // Admin routes here
    Route::any('/', [UserController::class, 'userProperties'])->name('admin.home');
    Route::get('/properties', [FrontController::class, 'properties'])->name('admin_properties');
    Route::post('/property', [AdminPropertyController::class, 'store'])->name('admin.property.store');
    Route::get('/property', [FrontController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/properties/{property}/edit', [AdminPropertyController::class, 'edit'])->name('admin.property.edit');
    Route::put('/properties/{property}', [AdminPropertyController::class, 'update'])->name('admin.property.update');
    Route::delete('/properties/{property}', [AdminPropertyController::class, 'destroy'])->name('admin.property.destroy');
});
