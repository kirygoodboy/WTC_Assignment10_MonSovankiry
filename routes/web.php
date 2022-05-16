<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\Pagescontroller::class, 'index']);

Route::get('/login', [\App\Http\Controllers\Userscontroller::class, 'login'])->name('users.login');
Route::post('/login', [\App\Http\Controllers\Userscontroller::class, 'do_login'])->name('users.do_login');

Route::get('/register', [\App\Http\Controllers\Userscontroller::class, 'register'])->name('users.register');
Route::post('/register', [\App\Http\Controllers\Userscontroller::class, 'do_register'])->name('users.do_register');
