<?php

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\DroppointController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TransactionController as AdminTransactionController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Client\AuthController;
use App\Http\Controllers\Client\CheckoutController;
use App\Http\Controllers\Client\HomeController as ClientHomeController;
use App\Http\Controllers\Client\OrderController;
use App\Http\Controllers\Client\PaymentController;
use App\Http\Controllers\Client\ProposalController;
use App\Http\Controllers\Client\TransactionController;
use App\Http\Controllers\Client\UserController;
use App\Http\Controllers\Droppoint\HomeController as DroppointHomeController;
use App\Http\Controllers\Droppoint\OrderController as DroppointOrderController;
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

/**
 * Admin Route
 */
Route::get('/admin/login', [AdminAuthController::class, 'loginView'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);

Route::middleware(['auth', 'admin'])->group(function () {
    Route::view('/admin', 'admin.index')->name('admin.index');
    
    Route::prefix('admin')->group(function() {
        Route::prefix('produk')->group(function() {
            Route::get('/', [ProductController::class, 'index'])->name('admin.product.index');
            Route::get('list', [ProductController::class, 'daftar'])->name('admin.product.list');
            Route::get('baru', [ProductController::class, 'create'])->name('admin.product.create');
            Route::post('baru', [ProductController::class, 'store']);
            Route::delete('detail/{product}', [ProductController::class, 'destroy'])->name('admin.product.delete');
        });
    
        Route::prefix('pesanan')->group(function() {
            Route::get('list', [AdminOrderController::class, 'all'])->name('admin.order.list');
            Route::get('detail/{basket}', [AdminOrderController::class, 'show'])->name('admin.order.show');
            Route::post('detail/{basket}/po', [AdminOrderController::class, 'sendPO'])->name('admin.order.send-po');
        });
    
        Route::prefix('transaksi')->group(function() {
            Route::get('list', [AdminTransactionController::class, 'all'])->name('admin.transaction.list');
            Route::get('detail/{payment}', [AdminTransactionController::class, 'show'])->name('admin.transaction.show');
            Route::post('detail/{payment}/confirm', [AdminTransactionController::class, 'confirm'])->name('admin.transaction.confirm');
        });

        Route::prefix('droppoint')->group(function() {
            Route::get('list', [DroppointController::class, 'all'])->name('admin.droppoint.list');
            Route::get('create', [DroppointController::class, 'create'])->name('admin.droppoint.create');
            Route::post('create', [DroppointController::class, 'store'])->name('admin.droppoint.create');
        });

        Route::prefix('pelanggan')->group(function() {
            Route::get('proposal', [AdminUserController::class, 'listProposal'])->name('admin.user.new');
            Route::get('proposal/{proposal}', [AdminUserController::class, 'acceptProposal'])->name('admin.user.new.confirm');
        });
    });
    
    
    Route::view('/admin/pelanggan', 'admin.user.index')->name('admin.user.index');
    Route::view('/admin/pelanggan/daftar-pelanggan', 'admin.user.list')->name('admin.user.list');
    
    Route::view('/admin/transaksi-keuangan', 'admin.transaction.index')->name('admin.transaction.index');
    Route::view('/admin/transaksi-keuangan/baru', 'admin.transaction.new')->name('admin.transaction.new');
});

/**
 * Droppoint Route
 */

Route::prefix('droppoint')->middleware(['auth', 'droppoint'])->group(function() {
    Route::get('/', [DroppointHomeController::class, 'index'])->name('droppoint.home');

    Route::prefix('order')->group(function() {
        Route::get('detail/{basket}', [DroppointOrderController::class, 'show'])->name('droppoint.order.show');
        Route::post('detail/{basket}/sent', [DroppointOrderController::class, 'sent'])->name('droppoint.order.sent');
    });
});


/**
 * Client Route
 */
Route::get('/', [ClientHomeController::class, 'index'])->name('client.index');

Route::get('register', [AuthController::class, 'registerView'])->name('client.register');
Route::post('register', [AuthController::class, 'register']);

Route::get('login', [AuthController::class, 'loginView'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('client.login');

Route::middleware(['auth'])->group(function () {
    Route::get('checkout', [CheckoutController::class, 'index'])->name('client.checkout');
    Route::get('payment', [PaymentController::class, 'create'])->name('client.payment');
    Route::get('pesanan', [OrderController::class, 'index'])->name('client.order');
    Route::get('transaksi', [TransactionController::class, 'index'])->name('client.transaction');
    Route::get('logout', [AuthController::class, 'logout'])->name('client.logout');
    Route::get('akun', [UserController::class, 'index'])->name('client.profile');
    Route::post('akun', [UserController::class, 'update']);
    Route::get('akun/keamanan', [UserController::class, 'security'])->name('client.security');
    Route::post('akun/keamanan', [UserController::class, 'updatePassword']);
    Route::prefix('proposal')->group(function() {
        Route::get('agen', [ProposalController::class, 'agentCreate'])->name('client.proposal.agent.create');
        Route::post('agen', [ProposalController::class, 'agentStore'])->name('client.proposal.agent.create');
    });
});