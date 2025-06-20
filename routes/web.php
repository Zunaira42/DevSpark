<?php

use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\app\ProductController as ControllersProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// admin-routes

Route::prefix('admin')->group(function () {
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/dashboard', function () {
            return view('layouts.dashboard');
        });

        Route::resource('products', ProductController::class);
        Route::resource('Orders', OrderController::class);
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
