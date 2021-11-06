<?php

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
Route::view('/admin/produk', 'admin.product.index')->name('admin.product.index');
Route::view('/admin/produk/baru', 'admin.product.create')->name('admin.product.create');
Route::view('/admin/pelanggan', 'admin.user.index')->name('admin.user.index');
Route::view('/admin/transaksi-keuangan', 'admin.transaction.index')->name('admin.transaction.index');
