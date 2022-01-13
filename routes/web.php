<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListAnggotaPage;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\NarasumberController;
use App\Http\Controllers\ListAnggotaPageController;
use App\Http\Controllers\ListKelompokPageController;
use App\Http\Controllers\ListPesertaPageController;
use App\Http\Controllers\ListNarasumberPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/narasumber', [TokenController::class, 'generate']);

Route::get('/', function () {
    return view('landing');
   //  return view('welcome');
});

Route::get('/dashboard/narasumber/tambah-narasumber', function () {
    return view('tambah-narasumber');
   //  return view('welcome');
});

Route::middleware('admin')->group(function () {
    Route::get('/admin', [AdminPageController::class, 'index'])->name('admin');
    Route::post('/store-new-narasumber', [AdminPageController::class, 'store'])->name('store-new-narsum');
    Route::get('/dashboard/peserta', [ListPesertaPageController::class, 'index'])->name('list-peserta');
    Route::get('/dashboard/peserta/{id}', [ListPesertaPageController::class, 'delete'])->name('delete-member');
    Route::get('/dashboard/narasumber', [ListNarasumberPageController::class, 'index'])->name('list-narasumber');
    Route::get('/dashboard/kelompok', [ListKelompokPageController::class, 'index'])->name('list-kelompok');
    Route::get('/dashboard/kelompok/{id}', [ListAnggotaPageController::class, 'index'])->name('list-anggota');
    Route::get('/dashboard/kelompok/{group_id}/{id}', [ListAnggotaPageController::class, 'delete'])->name('delete-anggota');
});

Route::middleware('narasumber')->group(function () {
    Route::get('/narasumber', [NarasumberController::class, 'index']);
    Route::get('/narasumber/generate-token', [TokenController::class, 'generate'])->name('generate-token');
    Route::get('/token/{id}', [NarasumberController::class, 'getTokenDetail']);
    Route::get('/narasumber/{token_id}/accept/{id}', [RequestController::class, 'accept']);
    Route::get('/narasumber/{token_id}/deny/{id}', [RequestController::class, 'deny']);
});

Route::middleware('peserta')->group(function () {
    Route::get('/peserta', [PesertaController::class, 'index']);
    Route::post('/peserta', [PesertaController::class, 'submitToken'])->name('submit-token');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
