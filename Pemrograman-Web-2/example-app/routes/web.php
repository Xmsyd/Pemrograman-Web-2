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
        [TokoController::class, 'customer'])->name('customer.customer');

    // Praktikum 12
    Route::prefix('produk')->group(function () {
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

    // Tugas P12
    // membuat grup agar mencegah bentrok pada fungsi/url/route yang dipanggil
    // route disini memiliki fungsinya masing masing seperti
    // route get untuk mengambil data, post untuk insert, delete untuk menghapus, dan put untuk mengupdate
    Route::prefix('customer')->group(function () {
    Route::get('create',            [TokoController::class, 'create2'  ])  ->name  ('customer.create');
    Route::post('/',                [TokoController::class, 'store2'   ])  ->name  ('customer.store');
    Route::get('/{customer}/edit',  [TokoController::class, 'edit2'    ])  ->name  ('customer.edit');
    Route::delete('/{customer}',    [TokoController::class, 'destroy2' ])  ->name  ('customer.destroy');
    Route::put('/{customer}',       [TokoController::class, 'update2'  ])  ->name  ('customer.update');
    });
});          