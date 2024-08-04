<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KomputerController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('customer', CustomerController::class);
Route::resource('login', LoginController::class);
Route::resource('komputer', KomputerController::class);
Route::resource('pegawai', PegawaiController::class);
Route::resource('keluhan', KeluhanController::class);
Route::resource('barang', BarangController::class);
Route::resource('supplier', SupplierController::class);
Route::resource('profile', ProfileController::class);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
