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
    return 'Index';
});

Route::get('/redirect', function () {
    return 'Redirect';
});

Route::get('/register', function () {
    return 'Register';
});

Route::get('/recover', function () {
    return 'Recover';
});

Route::get('/login', function () {
    return 'Login';
});

Route::get('/logout', function () {
    return 'Logout';
});

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('site.index');
Route::get('/redirect', [\App\Http\Controllers\IndexController::class, 'redirect'])->name('site.redirect');
Route::get('/register', [\App\Http\Controllers\AccountController::class, 'register'])->name('site.register');
Route::get('/recover', [\App\Http\Controllers\AccountController::class, 'recover'])->name('site.recover');
Route::get('/login', [\App\Http\Controllers\AccountController::class, 'login'])->name('site.login');
Route::get('/logout', [\App\Http\Controllers\AccountController::class, 'logout'])->name('site.register');
Route::prefix('/app')->group(function(){
    Route::get('/generate',  [\App\Http\Controllers\LinkController::class, 'generate'])->name('app.generate');
    Route::get('/remove', function() { echo 'remove'; })->name('app.remove');
    Route::get('/list', [\App\Http\Controllers\LinkController::class, 'list'])->name('app.list');
});
