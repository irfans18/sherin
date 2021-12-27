<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListAnggotaPage;
use App\Http\Controllers\ListAnggotaPageController;
use App\Http\Controllers\ListPesertaPageController;
use App\Http\Controllers\NarasumberController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\TokenController;
use Illuminate\Support\Facades\Route;

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

Route::get('/peserta', [PesertaController::class, 'index']);
Route::post('/peserta', [PesertaController::class, 'submitToken'])->name('submit-token');

Route::get('/narasumber', [NarasumberController::class, 'index']);
Route::get('/narasumber/generate-token', [TokenController::class, 'generate'])->name('generate-token');
Route::get('/token/{id}', [NarasumberController::class, 'getTokenDetail']);
Route::get('/narasumber/{token_id}/accept/{id}', [RequestController::class, 'accept']);
Route::get('/narasumber/{token_id}/deny/{id}', [RequestController::class, 'deny']);

Route::get('/admin', [AdminPageController::class, 'index'])->name('admin');
Route::get('/dashboard/peserta', [ListPesertaPageController::class, 'index'])->name('list-peserta');
Route::get('/dashboard/peserta/{id}', [ListPesertaPageController::class, 'delete'])->name('delete-member');

Route::get('/dashboard/narasumber', function () {
    return view('list-narasumber');
})->name('list-narasumber');

// Route::get('/admin-peserta', function () {
//     return view('admin-peserta');
// })->name('admin-peserta');

Route::get('/dashboard/kelompok', function () {
    return view('list-kelompok');
})->name('list-kelompok');

Route::get('/admin-detail-kelompok', function () {
    return view('admin-detail-kelompok');
})->name('admin-detail-kelompok');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth'])->name('dashboard');


require __DIR__ . '/auth.php';
