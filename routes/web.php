<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\BukuController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PeminjamanController;
use App\Http\Controllers\User\KatalogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard / Katalog Buku untuk Siswa (User) & Dashboard Admin
Route::middleware(['auth', 'verified'])->group(function () {
    
    // Route User (Katalog & Peminjaman)
    Route::get('/dashboard', [KatalogController::class, 'index'])->name('dashboard');
    Route::post('/dashboard/pinjam', [KatalogController::class, 'store'])->name('user.pinjam');

    // Dashboard Admin
    Route::get('/admin/dashboard', function () {
        // Hanya admin yang boleh mengakses
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Akses ditolak.');
        }

        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Route CRUD User
    Route::resource('/admin/user', UserController::class, [
        'as' => 'admin'
    ]);

    Route::post('/admin/buku', [BukuController::class, 'store'])->name('buku.store');
    
    // Route CRUD Buku
    Route::resource('/admin/buku', BukuController::class, [
        'as' => 'admin'
    ]);

    // Route CRUD Peminjaman
    Route::resource('/admin/peminjaman', PeminjamanController::class, [
        'as' => 'admin'
    ]);

    // Route Khusus Pengembalian Buku
    Route::patch('/admin/peminjaman/{peminjaman}/kembali', [PeminjamanController::class, 'updateStatus'])
        ->name('admin.peminjaman.kembali');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__.'/auth.php';