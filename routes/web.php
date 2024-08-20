<?php

use App\Http\Controllers\Frontends\RegisterController;
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

// frontends
Route::get('/',fn()=>view('welcome'));

// auth
Route::get('/login',fn()=>view('frontends.login'))->name('login');
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// backends