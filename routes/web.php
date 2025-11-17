<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;

// Show login/signup page
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login.view');

// Handle login form submission
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Handle signup form submission
Route::post('/signup', [RegisterController::class, 'register'])->name('signup.submit');

// Dashboard (after login)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');


Route::get('/register', [RegisterController::class, 'index'])->name('register.form');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/edit/{id}', [LoginController::class, 'editIndex'])->name('edit.show');
Route::post('/edit/{id}', [LoginController::class, 'edit'])->name('edit');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/list', [LoginController::class, 'list'])->name('list');

Route::delete('/delete/{id}', [LoginController::class, 'delete'])->name('delete');