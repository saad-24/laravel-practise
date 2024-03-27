<?php

use App\Http\Controllers\BlogCommentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\SignupController;
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
    Route::post('/login', [UserController::class, 'login']);
    Route::get('/login', [FrontController::class, 'Login'])->name('login');
    Route::get('/register', [FrontController::class, 'registertest'])->name('crowd.register');
    Route::post('/signup/step1', [SignupController::class, 'step1'])->name('signup.step1.post');
    Route::get('/signup/step2', [FrontController::class, 'registertest2'])->name('signup.step2');
    Route::post('/signup/step2', [SignupController::class, 'step2'])->name('signup.step2.post');
    Route::get('/signup/step3', [FrontController::class, 'registertest3'])->name('signup.step3');
    Route::post('/signup/step3', [SignupController::class, 'step3'])->name('signup.step3.post');
    Route::get('/signup/step4', [FrontController::class, 'registertest4'])->name('signup.step4');
    Route::post('/signup/step4', [SignupController::class, 'step4'])->name('signup.step4.post');
});

Route::middleware('auth')->group(function () {
    // Auth routes here
    Route::any('/', [UserController::class, 'userProperties'])->name('crowd');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/terms-and-conditions', [FrontController::class, 'termsconditions'])->name('crowd.terms');
    Route::get('/en', [FrontController::class, 'en'])->name('crowd.en');
    Route::get('/privacy-policy', [FrontController::class, 'privacypolicy'])->name('crowd.policy');
    Route::get('/sell-property', [FrontController::class, 'sellproperty'])->name('crowd.sell');
    Route::get('/property_detail/{id}', [PropertyDetailController::class, 'show'])->name('property_detail');
    Route::any('/properties/pay', [PaymentController::class, 'pay'])->name('properties.pay');
    // Route::get('/properties/pay', [PaymentController::class, 'index'])->name('custom');
    Route::get('/profile', [FrontController::class, 'userDashboard'])->name('front.dashboard');
    Route::get('/preference', [FrontController::class, 'preference'])->name('front.preference');
    Route::get('/tier', [FrontController::class, 'tier'])->name('front.tier');
    Route::get('/blog', [FrontController::class, 'blog'])->name('front.blog');
    Route::get('/blog/{blog}/detail', [BlogController::class, 'blogDetail'])->name('blog.detail');
    Route::post('/blogs/{blog}/comment', [BlogCommentController::class, 'store'])->name('blog.comment.store');
    Route::post('/contact', [ContactController::class, 'store'])->name('blog.contact.store');
    Route::get('/account', [FrontController::class, 'account'])->name('front.account');
    Route::get('/properties', [FrontController::class, 'properties'])->name('front.properties');
    Route::get('/rewards', [FrontController::class, 'Rewards'])->name('crowd.rewards');
    Route::get('/portfolio', [FrontController::class, 'Portfolio'])->name('crowd.portfolio');
    Route::post('/cart/add/{property}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'index'])->name('crowd.cart');
    Route::get('/checkout', [FrontController::class, 'checkout'])->name('checkout');
    Route::get('/wallet', [FrontController::class, 'Wallet'])->name('crowd.wallet');
    Route::get('/about', [FrontController::class, 'About'])->name('crowd.about');
    Route::get('/golden_visa', [FrontController::class, 'Golden'])->name('crowd.golden_visa');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //card
    Route::get('/add_card', [FrontController::class, 'addCard'])->name('crowd.card');
    Route::post('/save-card', [CardController::class, 'saveCard'])->name('save-card');
    Route::get('/edit-card/{id}', [CardController::class, 'edit'])->name('edit-card');
    Route::put('/update-card/{id}', [CardController::class, 'update'])->name('update-card');
    Route::any('/delete-card/{id}', [CardController::class, 'destroy'])->name('delete-card');

    //currency
    Route::post('/set-currency', [CurrencyController::class, 'setCurrency'])->name('set.currency');

    //paypal
    Route::get('/create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');
    Route::get('/process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction');
    Route::get('/success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction');
    Route::get('/cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');

    //stripe
    Route::get('/charge', [StripeController::class, 'index'])->name('stripe');
    Route::post('/charge', [StripeController::class, 'charge'])->name('stripe-payment');

    //wallet
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

    // Admin Panel
    Route::any('/admin-panel', [FrontController::class, 'adminPanel'])->name('admin.home');
    Route::get('/admin-panel/properties', [FrontController::class, 'adminProperty'])->name('admin.panel.property');
    Route::get('/admin-panel/blog', [FrontController::class, 'adminBlog'])->name('admin.panel.blog');
    Route::get('/admin-panel/blog-comments', [BlogController::class, 'adminBlogComment'])->name('admin.panel.blog-comments');
    Route::get('/admin-panel/queries', [FrontController::class, 'adminQueries'])->name('admin.panel.queries');
    Route::get('/admin-panel/users', [FrontController::class, 'adminUsers'])->name('admin.panel.users');
    Route::get('/admin-panel/wallet', [FrontController::class, 'adminWallet'])->name('admin.panel.wallet');
    Route::get('/admin-panel/ownership', [FrontController::class, 'adminOwnership'])->name('admin.panel.ownership');
    Route::get('/admin-panel/investment', [FrontController::class, 'adminInvestment'])->name('admin.panel.investment');
    Route::get('/contacts/{contact}/respond', [ContactController::class, 'showResponseForm'])->name('contacts.respond');
    Route::post('/contacts/{contact}/respond', [ContactController::class, 'storeResponse'])->name('contacts.storeResponse');

    // Crowd
    Route::get('/properties', [FrontController::class, 'properties'])->name('admin_properties');
    Route::post('/property', [AdminPropertyController::class, 'store'])->name('admin.property.store');

    //blog
    Route::get('/blog', [AdminPropertyController::class, 'blogform'])->name('admin.blog.form');
    Route::post('/blog', [AdminPropertyController::class, 'blogstore'])->name('admin.blog.store');
    Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');
    Route::any('/blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');
    Route::any('/comments/{comment}', [BlogCommentController::class, 'destroy'])->name('comments.destroy');
    //property
    Route::get('/property', [FrontController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/properties/{property}/edit', [AdminPropertyController::class, 'edit'])->name('admin.property.edit');
    Route::put('/properties/{property}', [AdminPropertyController::class, 'update'])->name('admin.property.update');
    Route::delete('/properties/{property}', [AdminPropertyController::class, 'destroy'])->name('admin.property.destroy');






});
