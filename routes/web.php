<?php

use App\Http\Controllers\AuthenticatedSessionController;
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

// Página principal y otras vistas estáticas
Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/about-us', function () {
    return Inertia::render('AboutUs');
});

Route::get('/contact', function () {
    return Inertia::render('Contact');
});

Route::get('/purchasesSales', function () {
    return Inertia::render('PurchasesSales');
});

Route::get('/transactions', function () {
    return Inertia::render('Transactions');
});

Route::get('/account', function () {
    return Inertia::render('Account');
});

Route::get('/paymentMethods', function () {
    return Inertia::render('PaymentMethods');
});

Route::get('/notifications', function () {
    return Inertia::render('Notifications');
});

Route::get('/explore', function () {
    return Inertia::render('Explore');
});

Route::get('/create', function () {
    return Inertia::render('Create');
});

Route::get('/createMultiple', function () {
    return Inertia::render('CreateMultiple');
});

Route::get('/new-blog', function () {
    return Inertia::render('CreateBlog');
});

Route::get('/test', function () {
    return Inertia::render('Welcome', [
        'canLogin'       => Route::has('login'),
        'canRegister'    => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion'     => PHP_VERSION,
    ]);
});

// Rutas relacionadas con los blogs
Route::get('/get-ramdon-blogs-for-home', function () {
    $blogs = Blog::inRandomOrder()->limit(4)->get();
    foreach ($blogs as $blog) {
        $blog->load("secciones_informativas");
    }
    return $blogs;
});

//Ruta para ver el blog pero en modo usuario normal
Route::get('/post-detail/{id}', function ($id) {
    $blog = Blog::with(["secciones_informativas"])->find($id);
    if ($blog) {
        return Inertia::render('Blogs/Blog', ['blog' => $blog]);
    } else {
        abort(404);
    }
});


Route::post('addNewBlog', [BlogController::class, 'addNewBlog'])->name('addNewBlog');
Route::post('updateBlog', [BlogController::class, 'updateBlog'])->name('updateBlog');
Route::get('getCategoriesBlog', [BlogController::class, 'getCategoriesBlog'])->name('getCategoriesBlog');

// Rutas relacionadas con secciones informativas
Route::post('add-secction-informativa', [SeccionInformativaController::class, 'inserSeccionInformativa'])->name('addSecctionInformativa');
Route::post('update-secction-informativa', [SeccionInformativaController::class, 'updateSeccionInformativa'])->name('updateSecctionInformativa');

// Rutas protegidas por middleware
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

    //Ruta para ver blog en modo administrador y editarlo
    Route::get('/post-detail-edit/{id}', function ($id) {
        $blog = Blog::with(["secciones_informativas"])->find($id);
        if ($blog) {
            return Inertia::render('Blogs/EditBlog', ['blog' => $blog]);
        } else {
            abort(404);
        }
    });

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
