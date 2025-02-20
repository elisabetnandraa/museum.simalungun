<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\KoleksiController;
use App\Http\Controllers\Admin\PameranController;

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

// Authentication Routes
Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::middleware(['admin'])->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

        // CMS untuk Berita
        Route::get('admin/berita', [BeritaController::class, 'index'])->name('admin.berita.index');
        Route::post('admin/berita', [BeritaController::class, 'store'])->name('admin.berita.store');
        Route::put('admin/berita/{berita}', [BeritaController::class, 'update'])->name('admin.berita.update');
        Route::delete('admin/berita/{berita}', [BeritaController::class, 'destroy'])->name('admin.berita.destroy');

        // CMS untuk Profil
        Route::get('admin/profil', [ProfilController::class, 'index'])->name('admin.profil.index');
        Route::post('admin/profil', [ProfilController::class, 'store'])->name('admin.profil.store');
        Route::put('admin/profil/{profil}', [ProfilController::class, 'update'])->name('admin.profil.update');
        Route::delete('admin/profil/{profil}', [ProfilController::class, 'destroy'])->name('admin.profil.destroy');

        // CMS untuk Jadwal
        Route::get('admin/jadwal', [JadwalController::class, 'index'])->name('admin.jadwal.index');
        Route::post('admin/jadwal', [JadwalController::class, 'store'])->name('admin.jadwal.store');
        Route::put('admin/jadwal/{jadwal}', [JadwalController::class, 'update'])->name('admin.jadwal.update');
        Route::delete('admin/jadwal/{jadwal}', [JadwalController::class, 'destroy'])->name('admin.jadwal.destroy');

        // CMS untuk Galeri
        Route::get('admin/galeri', [GaleriController::class, 'index'])->name('admin.galeri.index');
        Route::post('admin/galeri', [GaleriController::class, 'store'])->name('admin.galeri.store');
        Route::put('admin/galeri/{galeri}', [GaleriController::class, 'update'])->name('admin.galeri.update');
        Route::delete('admin/galeri/{galeri}', [GaleriController::class, 'destroy'])->name('admin.galeri.destroy');

        // CMS untuk Koleksi
        Route::get('admin/koleksi', [KoleksiController::class, 'index'])->name('admin.koleksi.index');
        Route::post('admin/koleksi', [KoleksiController::class, 'store'])->name('admin.koleksi.store');
        Route::put('admin/koleksi/{koleksi}', [KoleksiController::class, 'update'])->name('admin.koleksi.update');
        Route::delete('admin/koleksi/{koleksi}', [KoleksiController::class, 'destroy'])->name('admin.koleksi.destroy');

        // CMS untuk Pameran
        Route::get('admin/pameran', [PameranController::class, 'index'])->name('admin.pameran.index');
        Route::post('admin/pameran', [PameranController::class, 'store'])->name('admin.pameran.store');
        Route::put('admin/pameran/{pameran}', [PameranController::class, 'update'])->name('admin.pameran.update');
        Route::delete('admin/pameran/{pameran}', [PameranController::class, 'destroy'])->name('admin.pameran.destroy');

    });

    // Dashboard untuk Tamu
    Route::middleware(['tamu'])->group(function () {
        Route::get('/tamu', [TamuController::class, 'index'])->name('tamu.dashboard');
    });
});
