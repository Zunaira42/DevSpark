<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\app\ProductController as ControllersProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/welcome', function () {
    return view('layouts.welcome');
});


Route::get('/home', [ControllersProductController::class, 'index'])->name('product');
Route::get('/products/{id}', [ControllersProductController::class, 'show']);

Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

// Buy now redirect route (for unauthenticated users)
Route::get('/buy-now-redirect', function () {
    if (!auth()->check()) {
        session(['buy_now_redirect' => true]);
        return redirect()->route('register');
    }
    return redirect()->route('checkout');
})->name('buy.now.redirect');

// Protected checkout route
Route::middleware(['auth'])->group(function () {
    Route::get('/checkout', function () {
        return view('app.checkout');
    })->name('checkout');
    Route::get('/buy-now', function () {
        return redirect()->route('checkout');
    })->name('buy.now');
});

// ADMIN ROUTES

Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {


    Route::get('/dashboard', function () {
        $user = Auth::user();
        if (!$user || ($user->role !== 'admin' && $user->email !== 'admin@gmail.com')) {
            return redirect()->route('home')->with('error', 'You are not authorized to access admin panel.');
        }

        return view('layouts.dashboard');
    })->name('admin.dashboard');
    Route::resource('products', ProductController::class);
    Route::resource('users', UserController::class);
    Route::resource('Orders', OrderController::class);
});


// Profile routes (for all authenticated users)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
