<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AccountController;
// use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeController::class, 'index']);

Route::prefix('account')->group(function () {
    Route::get('login', [AccountController::class, 'login']);
    Route::post('login', [AccountController::class, 'checkLogin']);
    Route::get('logout', [AccountController::class, 'logout']);
    Route::get('register', [AccountController::class, 'register']);
    Route::post('register', [AccountController::class, 'postRegister']);
});

