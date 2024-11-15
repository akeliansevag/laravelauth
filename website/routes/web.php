<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;

Route::get('/', function () {
    return view('frontend.welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);

    // Route::prefix('users')->group(function () {
    //     Route::get('/', function () {
    //         return "users";
    //     });

    //     Route::get('/login', [UserController::class, 'login'])->name('users.login');
    //     Route::post('/login', [UserController::class, 'login'])->name('users.login');
    // });
});
