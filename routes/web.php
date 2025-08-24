<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/home', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/login', function () {
    return view('login', ['title' => 'Login']);
});

Route::get('/register', function () {
    return view('register', ['title' => 'Register']);
});

// Route for login
Route::post('/login', [AuthController::class, 'login'])->name('login.process');

// Route for register
Route::post('/register', [AuthController::class, 'register'])->name('register.process');