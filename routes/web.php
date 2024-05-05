<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\SeccionInformativaController;
use App\Models\Blog;
use App\Models\SeccionInformativa;
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

Route::get('/post-detail/{id}', function ($id) {
    $blog = Blog::with(["secciones_informativas"])->find($id); // Buscar el blog por su ID

    // Verificar si se encontró el blog
    if ($blog) {
        // Si se encontró el blog, renderizar la vista ProductDetail con el blog encontrado
        return Inertia::render('ProductDetail', ['blog' => $blog]);
    } else {
        // Si no se encontró el blog, puedes manejar esto como desees
        abort(404); // Por ejemplo, mostrar una página 404
    }
});
Route::post('add-secction-informativa', [SeccionInformativaController::class, 'inserSeccionInformativa'])->name('addNewBlog');
Route::post('update-secction-informativa', [SeccionInformativaController::class, 'updateSeccionInformativa'])->name('addNewBlog');



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
    //return Inertia::render('CreateBlog');
    return Inertia::render('CreateBlog');
});

// ! Working on it by sergio
Route::post('addNewBlog', [BlogController::class, 'addNewBlog'])->name('addNewBlog');
Route::get('getCategoriesBlog', [BlogController::class, 'getCategoriesBlog'])->name('addNewBlog');



Route::middleware([ 
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/createMultiple', function () {
        return Inertia::render('CreateMultiple');
    });

    Route::get('/new-blog', function () {
        return Inertia::render('CreateBlog');
    });

});

