<?php
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;

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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/service', [ServiceController::class, 'showServices'])->name('service');

Route::get('/product', [ProductController::class, 'showProducts'])->name('product');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/profileinfo', function () {
    return view('profile.profileinfo');
})->name('profileinfo');

Route::get('/bookingrequests', function () {
    return view('profile.bookingrequests');
})->name('bookingrequests');

Route::get('login', function () {
    return view('Login');
});

Route::get('register', function () {
    return view('Register');
})->name('register');

Route::get('/book', function () {
    return view('book');
})->name('book');

