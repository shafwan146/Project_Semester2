<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PesananController;
use App\Models\Pelanggan;
use App\Models\Pesanan;

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
    return redirect ('/home');
});

Route::group(['middleware' => ['auth', 'peran:admin-manager']], function(){
    Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); //buat route produk
    Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
    Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
    Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
    Route::post('/produk/store', [ProdukController::class, 'store'])->name('produk.store');
    Route::post('/produk/update/{id}', [ProdukController::class, 'update'])->name('produk.update');
    Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');
    
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
    Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
    Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
    Route::post('/kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::get('/kategori/delete/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

    Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan');
    Route::get('/pesanan/create', [PesananController::class, 'create'])->name('pesanan.create');
    Route::post('/pesanan/store', [PesananController::class, 'store'])->name('pesanan.store');
    Route::get('/pesanan/edit/{id}', [PesananController::class, 'edit'])->name('pesanan.edit');
    Route::post('/pesanan/update/{id}', [PesananController::class, 'update'])->name('pesanan.update');
    Route::get('/pesanan/delete/{id}', [PesananController::class, 'destroy'])->name('pesanan.destroy');

    Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan');
    Route::get('/pelanggan/create', [PelangganController::class, 'create'])->name('pelanggan.create');
    Route::post('/pelanggan/store', [PelangganController::class, 'store'])->name('pelanggan.store');
    Route::get('/pelanggan/edit/{id}', [PelangganController::class, 'edit'])->name('pelanggan.edit');
    Route::post('/pelanggan/update/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');
    Route::get('/pelanggan/delete/{id}', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');

    Route::get('/order', [App\Http\Controllers\OrderController::class, 'table'])->name('order');
    Route::get('/order/create', [OrderController::class, 'create'])->name('order.create');
    Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');
    Route::get('/order/edit/{id}', [OrderController::class, 'edit'])->name('order.edit');
    Route::post('/order/update/{id}', [OrderController::class, 'update'])->name('order.update');
    Route::get('/order/delete/{id}', [OrderController::class, 'destroy'])->name('order.destroy');
});
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/after_register', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/store', [App\Http\Controllers\StoreController::class, 'index'])->name('store');
Route::get('/orderan', [App\Http\Controllers\OrderController::class, 'index'])->name('orderan');
Route::get('/order/create', [OrderController::class, 'create'])->name('order.create');
Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');