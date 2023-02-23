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

//Show the login form
Route::get('login',['App\Http\Controllers\LoginController','showLoginForm'])->name('login');

//Handle The Login Request 
Route::post('login',['App\Http\Controllers\LoginController','login'])->name('login.store');

//Handle the logout Request
Route::post('logout', ['App\Http\Controllers\LoginController', 'logout'])->name('logout');

//Show the registration form
Route::get('register',['App\Http\Controllers\RegisterController','showRegisterForm'])->name('register');

//Handle the registration request
Route::post('register',['App\Http\Controllers\RegisterController','store'])->name('register.store');

//Handle the dashboard request
Route::get('/dashboard', function () {
    return view('auth.dashboard');
})->middleware(['auth'])->name('dashboard');
