<?php

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
    return view('login');
});

// Route::get('/register', [\App\Http\Controllers\UserController::class, 'register']);
// Route::get('/login', [\App\Http\Controllers\UserController::class, 'login']);
Route::post(
    '/register_post',
    [UserController::class, 'register_post']
)->name('register_post');

Route::post(
    '/register_post',
    [UserController::class, 'register_post']
)->name('register_post');

Route::post(
    '/login',
    [UserController::class, 'login_post']
)->name('login_post');

Route::get(
    '/login',
    [UserController::class, 'login']
    )->name('login');
    
Route::get(
    '/register',
    [UserController::class, 'register']
)->name('register');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::resource('crud', \App\Http\Controllers\HomeController::class);
    Route::get(
        '/logout_post',
        [UserController::class, 'logout']
    )->name('logout_post');
});


