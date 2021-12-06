<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\InformationController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['auth'])->group(function() {

    Route::get('dashboard',function() {
        return view('dashboard.index');
    })->name('dashboard.index');

    // Category
    Route::resource('category', CategoryController::class);

    // Post
    Route::resource('post', PostController::class);

    // Navigation
    Route::resource('navigation', NavigationController::class);

    // General
    Route::get('/general', [GeneralController::class, 'index'])->name('general.index');
    Route::put('/general/{general}', [GeneralController::class, 'update'])->name('general.update');

    // Home
    Route::get('/home', [HomeController::class, 'index'])->name('home.index');
    Route::put('/home/{home}', [HomeController::class, 'update'])->name('home.update');

    // Information
    Route::get('/information', [InformationController::class, 'index'])->name('information.index');
    Route::put('/information/{information}', [InformationController::class, 'update'])->name('information.update');

    // Settings
    Route::get('/settings',function() {
        return view('dashboard.settings.index');
    })->name('profile.show');

});

