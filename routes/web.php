<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('dashboard',[
        "title"=>"Dashboard"
    ]);
});
    Route::resource('pengguna',UserController::class)->except('destroy','create','show','update','edit');
Route::resource('barang',BarangController::class);