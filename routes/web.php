<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LogoutController;
// use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CostumerController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\RegistrasiController;


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

Route::get('/', function () {
    return view('home');
});

Route::get('/', [LandingPageController::class, 'index'])->name('landing-page');

Auth::routes();

Route::get('/registrasi', [RegistrasiController::class, 'index'])->name('registrasi.index');
Route::post('/registrasi', [RegistrasiController::class, 'store']);

Route::middleware(['auth'])->group(function () {
 
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

    Route::resource('/produk', ProdukController::class);
    Route::get('/produk/category/{id}', [CategoryController::class, 'category']);
    
    Route::Get('/produkSearch', [CostumerController::class, 'search'])->name('produk.search');
    Route::post('/produk/filtharga', [CostumerController::class, 'filtharga'])->name('produk.filtharga');
    Route::get('/sort', [CostumerController::class, 'sortByPrice'])->name('produk.sort');

Route::middleware(['admin'])->group(function () {
        Route::get('admin', [AdminController::class, 'index'])->name('dashboard.admin');
        Route::get('/produks', [AdminController::class, 'produk'])->name('produk.admin');
        Route::get('/users', [AdminController::class, 'usercostumer'])->name('user.index');
        Route::get('/riwayat', [AdminController::class, 'transaksi'])->name('riwayat.index');
        Route::put('/pembelians/{pembelian}/status', [AdminController::class, 'updateStatus'])->name('pembelians.updateStatus');
        Route::delete('/pembelian/{id}', [AdminController::class, 'destroy'])->name('pembelian.destroy');

    });

Route::middleware(['costumer'])->group(function () {
        Route::get('costumer', [CostumerController::class, 'index']);
        Route::get('/costumer/detail/{id}', [CostumerController::class, 'detail'])->name('costumer.detail');
        
        Route::get('/transaksi', [CostumerController::class, 'transaksi'])->name('transaksi.index');
        Route::get('bukti_bayar/{filename}', [CostumerController::class, 'showBuktiBayar'])->name('bukti_bayar.show');
        Route::get( '/cart',[CartController::class, 'index'])->name('cart.index');
        Route::post('/cart/{id}', [CartController::class, 'store']);
        Route::put('/cart{id}', [CartController::class, 'update'])->name('cart.update');
        Route::delete('/cart/{produk_id}', [CartController::class, 'removeCart'])->name('cart.remove');

        Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
        Route::post('/checkout/process', [CheckoutController::class, 'process'])->name('checkout.process');
        Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');

        Route::get('/chat', [ChatController::class, 'index']);
        Route::post('/chat/send', [ChatController::class, 'sendMessage']);
        Route::get('/chat/messages', [ChatController::class, 'getMessages']);

        Route::get('/recommend', [CostumerController::class, 'recommend'])->name('recommend');
        Route::post('/recommend/produk', [CostumerController::class, 'recommend']);
        Route::delete('/pembelians/{id}', [CostumerController::class, 'destroy'])->name('pembelians.destroy');
        Route::get('/sort', [CostumerController::class, 'sort'])->name('produk.sort');
    });
});
