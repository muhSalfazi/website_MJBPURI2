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
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:5,1'); // Rate limit login attempts
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Routes for authenticated users
Route::group(['middleware' => ['auth', 'check.session']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Donasi routes
    // Display a list of donations
    Route::get('donasi', [DonasiController::class, 'index'])->name('donasi.index');

    // Show the form for creating a new donation
    Route::get('donasi/create', [DonasiController::class, 'create'])->name('donasi.create');

    // Store a new donation
    Route::post('donasi', [DonasiController::class, 'store'])->name('donasi.store');

    // Display a specific donation
    Route::get('donasi/{id}', [DonasiController::class, 'show'])->name('donasi.show');

    // Show the form for editing a specific donation
    Route::get('donasi/{id}/edit', [DonasiController::class, 'edit'])->name('donasi.edit');

    // Update a specific donation
    Route::put('donasi/{id}', [DonasiController::class, 'update'])->name('donasi.update');

    // Delete a specific donation
    Route::delete('donasi/{id}', [DonasiController::class, 'destroy'])->name('donasi.destroy');

    // Pengeluaran routes
    Route::resource('pengeluaran', PengeluaranController::class);

    // download pdf
    Route::get('/pdf', [DonasiController::class, 'viewpdf'])->name('viewpdf');

    // Pesan routes
    Route::get('/pesan', [ShowPesanController::class, 'index'])->name('pesan.index');
    Route::delete('/pesan/{id}', [ShowPesanController::class, 'destroy'])->name('pesan.destroy');
});



// Public routes
Route::get('/', [WelcomeController::class, 'showWelcome'])->name('welcome')->middleware('guest');
Route::get('/mjb', [WelcomeController::class, 'donasi'])->name('tbl-donasi')->middleware('guest');
Route::post('/contact', [PesanController::class, 'store'])->name('pesan.store')->middleware('guest');
