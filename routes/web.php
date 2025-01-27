<?php

use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SwimController;
use App\Http\Controllers\SwimmingClassController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\UserEnrollmentController;
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

Route::get('/', [SwimController::class, 'landingpage']);
Route::get('/jadwals', [SwimController::class, 'jadwal']);
Route::get('/tentang', [TentangController::class, 'tentang'])->name('tentang');
Route::get('/kontak', [KontakController::class, 'kontak'])->name('kontak');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/lesku', [SwimController::class, 'lesku'])->name('dashboard');
    Route::get('/admin/dashboard', [SwimController::class, 'index'])->name('admin.dashboard');
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('swim', SwimController::class);
    Route::resource('jadwal', JadwalController::class);
    Route::resource('swimming', SwimmingClassController::class);
    Route::resource('users', UserEnrollmentController::class);
});



require __DIR__ . '/auth.php';
