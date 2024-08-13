<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SinhvienController;

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

Route::get('/sinhvien', [SinhvienController::class,'index'])->name('sinhvien.index');
Route::get('/sinhvien/detail/{MaSV}', [SinhvienController::class,'detail'])->name('sinhvien.detail');
Route::get('/sinhvien/back', [SinhvienController::class,'back'])->name('sinhvien.back');
Route::get('/sinhvien/create', [SinhvienController::class,'createGET'])->name('sinhvien.createGET');
Route::post('/sinhvien/create', [SinhvienController::class,'createPOST'])->name('sinhvien.createPOST');

Route::get('/sinhvien/edit/{MaSV}', [SinhvienController::class,'editGET'])->name('sinhvien.editGET');
Route::post('/sinhvien/edit', [SinhvienController::class,'editPOST'])->name('sinhvien.editPOST');

Route::get('/sinhvien/delete/{MaSV}', [SinhvienController::class,'delete'])->name('sinhvien.delete');
Route::post('/sinhvien', [SinhvienController::class,'search'])->name('sinhvien.search');


# 


