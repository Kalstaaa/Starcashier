<?php

use App\Http\Controllers\LandingPage;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Employe;
use App\Http\Controllers\Petugas;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('landing');
});



Route::get('/', [LandingPage::class, 'index'])->name('landing');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'auth'])->name('login.auth');

Route::get('/register', [AuthController::class, 'index'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');


Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect()->route('landing');
})->name('logout');


Route::get('/admin/home', [Admin::class, 'index'])->name('admin');
Route::get('/admin/employe', [Employe::class, 'index'])->name('employe');


Route::get('/petugas/home', [Petugas::class, 'index'])->name('petugas');
Route::get('/petugas/product', [Product::class, 'index'])->name('product');

