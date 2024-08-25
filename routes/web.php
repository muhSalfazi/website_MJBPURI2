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
    Route::resource('donasi', DonasiController::class);

    // Pengeluaran routes
    Route::resource('pengeluaran', PengeluaranController::class);

    // Pesan routes
    Route::get('/pesan', [ShowPesanController::class, 'index'])->name('pesan.index');
    Route::delete('/pesan/{id}', [ShowPesanController::class, 'destroy'])->name('pesan.destroy');
});

// Public routes
Route::get('/', [WelcomeController::class, 'showWelcome'])->name('welcome');
Route::get('/mjb', [WelcomeController::class, 'donasi'])->name('tbl-donasi');
Route::post('/contact', [PesanController::class, 'store'])->name('pesan.store');
