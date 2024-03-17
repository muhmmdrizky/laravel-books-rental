<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages/home/home');
});

Route::middleware('only_guest')->group(function () {
    Route::get('/pages/auth/login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticating']);
    Route::get('/pages/auth/register', [AuthController::class, 'register']);
    Route::post('/pages/auth/register', [AuthController::class, 'registerProcess']);
});

Route::middleware('auth')->group(function () {
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('/pages/dashboard/dashboard', [DashboardController::class, 'index']);
    Route::get('/pages/users/profile', [UserController::class, 'profile']);
    Route::get('/pages/books/books', [BookController::class, 'index']);
});
