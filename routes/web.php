<?php

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
    return view('welcome');
});

Route::get('login',['App\Http\Controllers\LoginController','showLoginForm'])->name('login');
//Handle the logout Request
Route::post('logoutfff', ['App\Http\Controllers\LoginController', 'logout'])->name('logout');
Route::get('register',['App\Http\Controllers\RegisterController','showRegisterForm'])->name('register');
Route::post('register',['App\Http\Controllers\RegisterController','store'])->name('register.store');
Route::get('/dashboard', function () {
    return view('auth.dashboard');
})->middleware(['auth'])->name('dashboard');
