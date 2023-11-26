<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignUpController;

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
    return view('pages.home');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/news', function () {
    return view('pages.news');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/pricing', function () {
    return view('pages.pricing');
});

Route::get('/MutualFunds', function () {
    return view('pages.MutualFunds');
});
// Route::resource('/signUp', SignUpController::class);


// Route::post('/signUp', [SignUpController::class, 'store'])->name('pages.store');

Route::get('/login', [SignUpController::class, 'login'])->name('login');
Route::post('/login', [SignUpController::class, 'loginPost'])->name('login.post');
Route::get('/signUp', [SignUpController::class, 'signUp'])->name('signUp');
Route::post('/signUp', [SignUpController::class, 'signUpPost'])->name('signUp.post');
Route::get('/logout', [SignUpController::class, 'logout']);




