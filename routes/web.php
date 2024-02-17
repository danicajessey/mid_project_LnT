<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;


Route::get("/", [KaryawanController::class,'show'])->name('show');

Route::get("/create", [KaryawanController::class,'create'])->name('create');

Route::post("/store", [KaryawanController::class,'store'])->name('store');

Route::get('/edit/{id}', [KaryawanController::class,'edit'])->name('edit');

Route::get('/edit2/{id}', [KaryawanController::class,'edit2'])->name('edit2');

Route::patch('/update/{id}', [KaryawanController::class,'update'])->name('update');

Route::put('update2/{id}', [KaryawanController::class,'update2'])->name('update2');

Route::delete('/delete/{id}', [KaryawanController::class,'delete'])->name('delete');

