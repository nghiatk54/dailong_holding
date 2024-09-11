<?php

use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\DashboardController;
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

// Create 1 group for the admin routes, prefix it with 'admin', and name it 'admin.'
Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    // Create group route use the controller DashboardController, prefix 'dashboard', name 'dashboard.'
    Route::controller(DashboardController::class)->prefix('dashboard')->name('dashboard.')->group(function () {
        // Route get index page
        Route::get('/', 'index')->name('index');
    });
    // Create group route use controller CompanyController, prefix 'company', name 'company.'
    Route::controller(CompanyController::class)->prefix('company')->name('company.')->group(function () {
        // Route get index page
        Route::get('/', 'index')->name('index');
    });
});