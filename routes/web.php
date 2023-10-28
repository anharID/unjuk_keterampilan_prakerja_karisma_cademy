<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return redirect('beranda');
});

Route::middleware('auth')->group(function () {
    Route::resource('kategori', KategoriController::class)->middleware('status:admin,editor');
    Route::resource('post', PostController::class)->middleware('status:admin,editor');
    Route::resource('produk', ProdukController::class)->middleware('status:admin,editor');
    Route::resource('user', UserController::class)->middleware('status:admin');
});

Route::get('beranda', [BerandaController::class, 'index'])->name('beranda');
Route::get('beranda/detail/{id}', [BerandaController::class, 'detail']);

Auth::routes();

Route::get('/info', [App\Http\Controllers\HomeController::class, 'index'])->name('info');
