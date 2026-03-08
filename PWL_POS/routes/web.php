<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

Route::get('/', [HomeController::class, 'index']);

Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductController::class, 'babyKid']);
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

Route::get('/sales', [SalesController::class, 'index']);

use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);

Route::get('/user/tambah', [UserController::class, 'tambah']);

Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);

Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);

Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);

use App\Http\Controllers\WelcomeController;
Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']);          // menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']);      // menampilkan data user (json) untuk datatables
    Route::get('/create', [UserController::class, 'create']);   // menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']);         // menyimpan data user baru
    Route::get('/{id}', [UserController::class, 'show']);       // menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);  // menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']);     // menyimpan perubahan data user
    Route::delete('/{id}', [UserController::class, 'destroy']); // menghapus data user
});

Route::group(['prefix' => 'level'], function () {
    Route::get('/', [App\Http\Controllers\LevelController::class, 'index']);          // menampilkan halaman awal level
    Route::post('/list', [App\Http\Controllers\LevelController::class, 'list']);      // menampilkan data level dalam bentuk json untuk datatables
    Route::get('/create', [App\Http\Controllers\LevelController::class, 'create']);   // menampilkan halaman form tambah level
    Route::post('/', [App\Http\Controllers\LevelController::class, 'store']);         // menyimpan data level baru
    Route::get('/{id}', [App\Http\Controllers\LevelController::class, 'show']);       // menampilkan detail level
    Route::get('/{id}/edit', [App\Http\Controllers\LevelController::class, 'edit']);  // menampilkan halaman form edit level
    Route::put('/{id}', [App\Http\Controllers\LevelController::class, 'update']);     // menyimpan perubahan data level
    Route::delete('/{id}', [App\Http\Controllers\LevelController::class, 'destroy']); // menghapus data level
});

Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [App\Http\Controllers\KategoriController::class, 'index']);          // menampilkan halaman awal kategori
    Route::post('/list', [App\Http\Controllers\KategoriController::class, 'list']);      // menampilkan data kategori dalam bentuk json untuk datatables
    Route::get('/create', [App\Http\Controllers\KategoriController::class, 'create']);   // menampilkan halaman form tambah kategori
    Route::post('/', [App\Http\Controllers\KategoriController::class, 'store']);         // menyimpan data kategori baru
    Route::get('/{id}', [App\Http\Controllers\KategoriController::class, 'show']);       // menampilkan detail kategori
    Route::get('/{id}/edit', [App\Http\Controllers\KategoriController::class, 'edit']);  // menampilkan halaman form edit kategori
    Route::put('/{id}', [App\Http\Controllers\KategoriController::class, 'update']);     // menyimpan perubahan data kategori
    Route::delete('/{id}', [App\Http\Controllers\KategoriController::class, 'destroy']); // menghapus data kategori
});

Route::group(['prefix' => 'supplier'], function () {
    Route::get('/', [App\Http\Controllers\SupplierController::class, 'index']);          // menampilkan halaman awal supplier
    Route::post('/list', [App\Http\Controllers\SupplierController::class, 'list']);      // menampilkan data supplier dalam bentuk json untuk datatables
    Route::get('/create', [App\Http\Controllers\SupplierController::class, 'create']);   // menampilkan halaman form tambah supplier
    Route::post('/', [App\Http\Controllers\SupplierController::class, 'store']);         // menyimpan data supplier baru
    Route::get('/{id}', [App\Http\Controllers\SupplierController::class, 'show']);       // menampilkan detail supplier
    Route::get('/{id}/edit', [App\Http\Controllers\SupplierController::class, 'edit']);  // menampilkan halaman form edit supplier
    Route::put('/{id}', [App\Http\Controllers\SupplierController::class, 'update']);     // menyimpan perubahan data supplier
    Route::delete('/{id}', [App\Http\Controllers\SupplierController::class, 'destroy']); // menghapus data supplier
});

Route::group(['prefix' => 'barang'], function () {
    Route::get('/', [App\Http\Controllers\BarangController::class, 'index']);          // menampilkan halaman awal barang
    Route::post('/list', [App\Http\Controllers\BarangController::class, 'list']);      // menampilkan data barang untuk datatables
    Route::get('/create', [App\Http\Controllers\BarangController::class, 'create']);   // form tambah barang
    Route::post('/', [App\Http\Controllers\BarangController::class, 'store']);         // simpan barang baru
    Route::get('/{id}', [App\Http\Controllers\BarangController::class, 'show']);       // detail barang
    Route::get('/{id}/edit', [App\Http\Controllers\BarangController::class, 'edit']);  // form edit barang
    Route::put('/{id}', [App\Http\Controllers\BarangController::class, 'update']);     // simpan update barang
    Route::delete('/{id}', [App\Http\Controllers\BarangController::class, 'destroy']); // hapus barang
});