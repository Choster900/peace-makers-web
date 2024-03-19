<?php

use App\Http\Controllers\BlogController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/test', function () {
    return Inertia::render('Welcome', [
        'canLogin'       => Route::has('login'),
        'canRegister'    => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion'     => PHP_VERSION,
    ]);
});
Route::get('/', function () {
    //return Inertia::render('Dashboard');
    return Inertia::render('Home');
});
Route::get('/explore', function () {
    //return Inertia::render('Dashboard');
    return Inertia::render('Explore');
});

Route::get('/post-detail', function () {
    //return Inertia::render('ProductDetail');
    return Inertia::render('ProductDetail');
});

Route::get('/about-us', function () {
    //return Inertia::render('AboutUs');
    return Inertia::render('AboutUs');
});

Route::get('/contact', function () {
    //return Inertia::render('Contact');
    return Inertia::render('Contact');
});

Route::get('/purchasesSales', function () {
    //return Inertia::render('PurchasesSales');
    return Inertia::render('PurchasesSales');
});

Route::get('/transactions', function () {
    //return Inertia::render('Transactions');
    return Inertia::render('Transactions');
});

Route::get('/account', function () {
    //return Inertia::render('Account');
    return Inertia::render('Account');
});

Route::get('/paymentMethods', function () {
    //return Inertia::render('PaymentMethods');
    return Inertia::render('PaymentMethods');
});

Route::get('/notifications', function () {
    //return Inertia::render('Notifications');
    return Inertia::render('Notifications');
});

Route::get('/create', function () {
    //return Inertia::render('Create');
    return Inertia::render('Create');
});

Route::get('/createMultiple', function () {
    //return Inertia::render('CreateMultiple');
    return Inertia::render('CreateMultiple');
});

Route::get('/new-blog', function () {
    //return Inertia::render('CreateMultiple');
    return Inertia::render('CreateBlog');
});

// ! Working on it by sergio
Route::post('addNewBlog', [BlogController::class, 'addNewBlog'])->name('addNewBlog');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

