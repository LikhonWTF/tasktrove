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

Route::controller(\App\Http\Controllers\AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'doLogin');
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'doRegister');
});

Route::controller(\App\Http\Controllers\DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index');
});

Route::controller(\App\Http\Controllers\SettingsController::class)->group(function () {
    Route::get('/settings', 'index');
    Route::put('/settings/profile', 'profile');
    Route::put('/settings/password', 'password');
});

Route::controller(\App\Http\Controllers\ChatbotController::class)->group(function () {
    Route::get('/chatbot', 'index');
});
