<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

// Create a route for the home page
Route::get('/', function () {
    // If the user is not logged in, redirect them to the login page
    if (!auth()->check()) {
        return redirect()->route('login');
    }
    return view('welcome');
})->name('home');

// Create group for the auth routes, controller is AuthController
Route::controller(AuthController::class)->group(function () {
    // Route get login page, if the user is not logged in
    Route::get('/login', 'login')->middleware('guest')->name('login');
    // Route post login
    Route::post('/login', 'postLogin')->middleware('guest');
    // Route logout
    Route::get('/logout', 'logout')->name('logout');
});