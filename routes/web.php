<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::group([], function() {
    Route::view('/', 'portfolio.index')->name('home');
    Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');
});

// Route::view('admin', 'admin')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

// require __DIR__.'/auth.php'; //! Not working with authentication
