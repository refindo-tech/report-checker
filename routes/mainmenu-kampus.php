<?php

use App\Http\Controllers\IncomingController;
use App\Http\Controllers\KampusController;
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

/* Route::get('/', function () {
    return view('welcome');
});
 */

// Route::middleware('auth')->group(function () {
//     Route::middleware('role:Admin|Purchasing|Gudang')->prefix('outcoming')->group(function () {
//         Route::get('/index', [OutcomingController::class, 'index'])->name('outcoming.index');
//         Route::get('/cetak/{id}', [OutcomingController::class, 'cetak_pdf'])->name('outcoming.print');
//     });
//     Route::middleware('role:Admin')->prefix('outcoming')->group(function () {
//         Route::get('/create', [OutcomingController::class, 'create'])->name('outcoming.create');
//         Route::post('/create', [OutcomingController::class, 'store'])->name('outcoming.store');
//         Route::get('/show/{id}', [OutcomingController::class, 'show'])->name('outcoming.show');
//         Route::get('/edit/{id}', [OutcomingController::class, 'edit'])->name('outcoming.edit');
//         Route::put('/{id}', [OutcomingController::class, 'update'])->name('outcoming.update');
//         Route::delete('/{id}', [OutcomingController::class, 'destroy'])->name('outcoming.destroy');
//     });
// });

Route::middleware('auth')->group(function () {

    // Rute untuk melihat barang keluar (role: Admin, Purchasing, Gudang)
    Route::middleware('permission:lihat-kampus')->prefix('kampus')->group(function () {
        Route::get('/index', [KampusController::class, 'index'])->name('kampus.index');
        Route::get('/cetak/{id}', [KampusController::class, 'cetak_pdf'])->name('kampus.print');
    });

    // Rute untuk menambah barang keluar (hanya Admin)
    Route::middleware('permission:tambah-kampus')->prefix('kampus')->group(function () {
        Route::get('/create', [KampusController::class, 'create'])->name('kampus.create');
        Route::post('/create', [KampusController::class, 'store'])->name('kampus.store');
    });

    // Rute untuk mengedit barang keluar (hanya Admin)
    Route::middleware('permission:edit-kampus')->prefix('kampus')->group(function () {
        Route::get('/edit/{id}', [KampusController::class, 'edit'])->name('kampus.edit');
        Route::put('/{id}', [KampusController::class, 'update'])->name('kampus.update');
    });

    // Rute untuk menghapus barang keluar (hanya Admin)
    Route::middleware('permission:hapus-kampus')->prefix('kampus')->group(function () {
        Route::delete('/{id}', [KampusController::class, 'destroy'])->name('kampus.destroy');
    });

    // Rute untuk melihat detail barang keluar (hanya Admin)
    Route::middleware('permission:lihat-kampus')->prefix('kampus')->group(function () {
        Route::get('/show/{id}', [KampusController::class, 'show'])->name('kampus.show');
    });
});
