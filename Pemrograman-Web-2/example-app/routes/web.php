<?php

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
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/Hello/{nama}/{alamat}', function ($nama, $alamat) {
    return "<h2> Hello $nama dari $alamat</h2>";
});

Route::get('/produk/{id}', function ($id) {
    return view('produk/index', ['id'=>$id]);
});


use App\Http\Controllers\UserController;

Route::get('user',
    [UserController::class, 'index']);

Route::get('user/daftar',
    [UserController::class, 'daftar']);

    
Route::post('/user/store', 
    [UserController::class, 'store'])->name('user/store');


// P9
use App\Http\Controllers\P9Controller;

Route::get('P9/index',
    [P9Controller::class, 'index']);

Route::post('P9/bayar',
    [P9Controller::class, 'bayar'])->name('P9/bayar');


// P10
use App\Http\Controllers\TokoController;

Route::prefix('toko') -> group(function(){

    
    Route::get('/',
        [TokoController::class, 'index']);

    Route::get('/detail',
        [TokoController::class, 'detail']);

    Route::get('/profile',
        [TokoController::class, 'profile']);

    // P11
    Route::get('/admin',
    [TokoController::class, 'admin'])->name('produk.admin');
    
    // tugas P11
    Route::get('/customer',
        [TokoController::class, 'customer']);

    // Praktikum 12
    Route::get('create', 
        [TokoController::class, 'create'])->name('produk.create');

    Route::post('/', 
        [TokoController::class, 'store'])->name('produk.store');

    Route::get('/{product}/edit',
    [TokoController::class, 'edit'])->name('produk.edit');

    Route::delete('/{product}',
    [TokoController::class, 'destroy'])->name('produk.destroy');

    Route::put('/{product}',
    [TokoController::class, 'update'])->name('produk.update');

});