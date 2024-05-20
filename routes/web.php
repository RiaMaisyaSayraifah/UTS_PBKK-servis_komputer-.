<?php

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\KomputerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

Route::resource('customers', CustomersController::class);
Route::resource('pegawai', PegawaiController::class);
Route::resource('komputer', KomputerController::class);
Route::resource('keluhan', KeluhanController::class);