<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AdminController;

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
    Route::get('/', [HomePageController::class, 'index'])->name('home');
    Route::post('/contact-submit', [HomepageController::class, 'submit'])->name('contact.submit');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', [AdminController::class, 'index'])->name('admin.projects.index');
    Route::get('/create', [AdminController::class, 'create'])->name('admin.projects.create');
    Route::post('/create', [AdminController::class, 'store'])->name('admin.projects.store');
    Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('admin.projects.edit');
    Route::patch('/edit/{id}', [AdminController::class, 'update'])->name('admin.projects.update');
    Route::delete('/delete/{id}', [AdminController::class, 'destroy'])->name('admin.projects.destroy');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
