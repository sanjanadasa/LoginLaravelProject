<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');

Route::get('/home', [AuthController::class, 'showHomeForm'])->middleware('auth')->name('Home');
Route::post('/home', [AuthController::class, 'home'])->name('Home');

Route::get('/usermenu', [AuthController::class, 'usermenu'])->name('Usermenu');

Route::get('/users', [AuthController::class, 'getAllUsers']);


Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

