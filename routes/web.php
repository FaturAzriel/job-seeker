<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\Admin\VacancyController;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [GuestController::class, 'home'])->name('home');
Route::get('/about', [GuestController::class, 'about'])->name('about');
Route::get('/jobs', [GuestController::class, 'jobs'])->name('jobs');
Route::get('/contact', [GuestController::class, 'contact'])->name('contact');

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');    
    
    Route::prefix('vacancy')->name('vacancy.')->group(function() {
        Route::get('/', [VacancyController::class, 'index'])->name('index');
        Route::get('/create', [VacancyController::class, 'create'])->name('create');
        Route::post('/store', [VacancyController::class, 'store'])->name('store');
    });

    Route::prefix('users')->name('users.')->group(function() {
        Route::get('/', [VacancyController::class, 'index'])->name('index');
        Route::get('/create', [VacancyController::class, 'create'])->name('create');
    });

});


require __DIR__.'/auth.php';
