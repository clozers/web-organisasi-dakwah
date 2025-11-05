<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RegistrationController;


Route::get('/', [EventController::class, 'index'])->name('home');
Route::get('/events/{event}', [EventController::class, 'show'])->middleware('auth')->name('events.show');
Route::post('/events/{event}/register', [RegistrationController::class, 'store'])->middleware('auth')->name('events.register');




Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/homepage', function () {
    return view('frontend.homepage.index');
})->name('homepage');

Route::get('/history', function () {
    return view('frontend.about.history');
})->name('history');

Route::get('/structure', function () {
    return view('frontend.about.structure');
})->name('structure');

Route::get('/news', function () {
    return view('frontend.news.news');
})->name('news');

Route::get('/activity', function () {
    return view('frontend.news.activity');
})->name('activity');

Route::get('/seminar', function () {
    return view('frontend.events.seminar');
})->name('seminar');

Route::get('/profile', function () {
    return view('frontend.account.profile');
})->name('profile');
