<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ShowPesanController;

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

// Routes for authentication
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:10,1'); // Rate limit login attempts
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Dashboard route with authentication
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

// Public routes
Route::get('/', [WelcomeController::class, 'showWelcome'])->name('welcome');
Route::get('/mjb', [WelcomeController::class, 'donasi'])->name('tbl-donasi');
Route::post('/contact', [PesanController::class, 'store'])->name('pesan.store');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
// Donasi routes with authentication
Route::resource('donasi', DonasiController::class)->middleware('auth');
Route::resource('pengeluaran', PengeluaranController::class)->middleware('auth');

Route::get('/pesan', [ShowPesanController::class, 'index'])->name('pesan.index')->middleware('auth');
Route::delete('/pesan/{id}', [ShowPesanController::class, 'destroy'])->name('pesan.destroy')->middleware('auth');