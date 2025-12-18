<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [ContactController::class, 'index'])->name('contact-form.index');
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/thanks', [ContactController::class, 'store']);

Route::middleware('auth')->group(function(){
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
});
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::get('/register', [AdminController::class, 'register'])->name('register');

Route::get('/search', [AdminController::class, 'search']);
Route::delete('/delete', [AdminController::class, 'destroy']);
