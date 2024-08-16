<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SeccionInformativaController;
use App\Http\Middleware\Authenticate;
use App\Models\Blog;
use App\Models\SeccionInformativa;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Socialite\Contracts\Factory;
use Laravel\Socialite\Facades\Socialite;
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

Route::get('/donate', function () {
    return Inertia::render('Donations/Donation');
})->name('donate');

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

Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
})->name('login-google');



Route::get('/google-callback', function () {
    $googleUser = Socialite::driver('google')->user(); // Cambié el nombre de la variable a $googleUser
   /*  dd($googleUser); // Esto debería mostrar la información del usuario
    Log::info('Google User Info:', (array) $googleUser); // Loguea la información */

   // return $googleUser;
    // Verifica si el usuario ya existe en la base de datos
    $user = User::where('external_auth', 'google')->first();

    if (!$user) {
        // Si el usuario no existe, créalo
        $user = User::create([
            'name' => $googleUser->name,
            'email' => $googleUser->email,
            'avatar' => $googleUser->avatar,
            'external_id' => $googleUser->id, // O asigna un valor si es necesario
            'external_auth' => 'google', // O asigna un valor si es necesario
        ]);
    }

    // Inicia sesión con el usuario
    Auth::login($user);

    return redirect('/');
});
