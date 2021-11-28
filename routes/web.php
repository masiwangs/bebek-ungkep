<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Client\CheckoutController;
use App\Http\Controllers\Client\HomeController as ClientHomeController;
use App\Http\Controllers\Client\OrderController;
use App\Http\Controllers\Client\PaymentController;
use App\Http\Controllers\Client\TransactionController;
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

Route::view('/admin', 'admin.index')->name('admin.index');
Route::prefix('admin')->group(function() {
    Route::prefix('produk')->group(function() {
        Route::get('/', [ProductController::class, 'index'])->name('admin.product.index');
        Route::get('list', [ProductController::class, 'daftar'])->name('admin.product.list');
        Route::get('baru', [ProductController::class, 'create'])->name('admin.product.create');
        Route::post('baru', [ProductController::class, 'store']);
        Route::delete('detail/{product}', [ProductController::class, 'destroy'])->name('admin.product.delete');
    });
});


Route::view('/admin/pelanggan', 'admin.user.index')->name('admin.user.index');
Route::view('/admin/pelanggan/daftar-pelanggan', 'admin.user.list')->name('admin.user.list');
Route::view('/admin/pelanggan/baru', 'admin.user.new')->name('admin.user.new');

Route::view('/admin/transaksi-keuangan', 'admin.transaction.index')->name('admin.transaction.index');
Route::view('/admin/transaksi-keuangan/daftar-transaksi', 'admin.transaction.list')->name('admin.transaction.list');
Route::view('/admin/transaksi-keuangan/baru', 'admin.transaction.new')->name('admin.transaction.new');

Route::get('/', [ClientHomeController::class, 'index'])->name('client.index');
Route::get('checkout', [CheckoutController::class, 'index'])->name('client.checkout');
Route::get('payment', [PaymentController::class, 'create'])->name('client.payment');
Route::get('pesanan', [OrderController::class, 'index'])->name('client.order');
Route::get('transaksi', [TransactionController::class, 'index'])->name('client.transaction');

Route::view('/akun', 'client.profile')->name('client.profile');
Route::view('/login', 'client.login')->name('client.login');
Route::view('/register', 'client.register')->name('client.register');
Route::view('/akun/keamanan', 'client.security')->name('client.security');