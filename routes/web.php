<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\app\ProductController as ControllersProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('layouts.welcome');
});

Route::get('/products', [ControllersProductController::class, 'index']);
Route::get('/products/{id}', [ControllersProductController::class, 'show']);

Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');


// admin-routes

Route::prefix('admin')->group(function () {
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/dashboard', function () {
            return view('layouts.dashboard');
        });

        Route::resource('products', ProductController::class);
        Route::resource('users', UserController::class);
        // Route::resource('cart', CartController::class);
        Route::resource('Orders', OrderController::class);
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
     Route::get('/buy-now', function () {
        return view('app.checkout');
    })->name('buy.now');
});

require __DIR__ . '/auth.php';
