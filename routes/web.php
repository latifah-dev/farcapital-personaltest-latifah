<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendonorController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/pendaftar',[PendonorController::class,'create'])->name('pendaftar');
Route::post('/store',[PendonorController::class,'store']);
Route::post('/storedetail',[PendonorController::class,'storedetail']);
Route::post('/storekesehatan',[PendonorController::class,'storekesehatan']);
Route::get('/pernyataan/{pendonor}',[PendonorController::class,'pernyataan'])->name('pernyataan');
Route::get('/list',[PendonorController::class,'list']);
Route::get('/detail/{id}',[PendonorController::class,'detail']);
Route::get('/kesehatan/{id}',[PendonorController::class,'kesehatan']);
