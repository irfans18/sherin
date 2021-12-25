<?php

use App\Http\Controllers\HomeController;
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
   return view('welcome');
});

Route::get('/peserta', function () {
   return view('peserta');
});
Route::get('/peserta', [PesertaController::class, 'index']);
Route::post('/peserta', [PesertaController::class, 'submitToken'])->name('submit-token');

Route::get('/narasumber', [NarasumberController::class, 'index']);
Route::get('narasumber/generate-token', [TokenController::class, 'generate'])->name('generate-token');
Route::get('/narasumber/{id}/detail', [NarasumberController::class, 'getTokenDetail']);
Route::get('/narasumber/{token_id}/accept/{id}', [RequestController::class, 'accept']);
Route::get('/narasumber/{token_id}/deny/{id}', [RequestController::class, 'deny']);

// Route::get('/narasumber-token-detail', function () {
//     return view('narasumber-token-detail');
// });

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/admin-narasumber', function () {
    return view('admin-narasumber');
});

Route::get('/admin-peserta', function () {
    return view('admin-peserta');
});

Route::get('/admin-kelompok', function () {
    return view('admin-kelompok');
});

Route::get('/admin-detail-kelompok', function () {
    return view('admin-detail-kelompok');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth'])->name('dashboard');


require __DIR__ . '/auth.php';
