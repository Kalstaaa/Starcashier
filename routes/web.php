<?php

use App\Http\Controllers\LandingPage;
use App\Http\Controllers\Login;
use App\Http\Controllers\Register;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Petugas;

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
    return view('welcome');
});

Route::get('/landing', [LandingPage::class, 'index'])->name('landing');
Route::get('/login', [Login::class, 'index'])->name('login');
Route::get('/register', [Register::class, 'index'])->name('register');
Route::get('/admin', [Admin::class, 'index'])->name('admin');
Route::get('/petugas', [Petugas::class, 'index'])->name('petugas');

