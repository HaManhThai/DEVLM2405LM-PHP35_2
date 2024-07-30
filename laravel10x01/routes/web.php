<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KhoaController;
use App\Http\Controllers\SinhVienController;
use App\Http\Controllers\MonhocController;
use App\Http\Controllers\FormDKController;
use App\Http\Controllers\FormDNController;
use App\Http\Controllers\SessionController;
use Illuminate\Http\Request;




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
Route::get('/',function(){return view('welcome');});

// test Request:
Route::get('/user',function(Request $request){
    return $request->path();
});

Route::get('/user',function(Request $request){
    return $request->fullUrl();
});

Route::get('/user',function(Request $request){
    return $request->host();
});

Route::get('/user',function(Request $request){
    return $request->httpHost();
});

Route::get('/user',function(Request $request){
    return $request->schemeAndHttpHost();
});

Route::get('/user',function(Request $request){
    return $request->method();
});

// Route Request cho controller: FormDKController
Route::get('/register',[FormDKController::class,'registerGet'])->name('register');
Route::post('',[FormDKController::class,'registerPost'])->name('register');

// Session:
Route::get('/Session/get',[SessionController::class,'getSessionData'])->name('getData');
Route::get('/Session/set',[SessionController::class,'storeSessionData'])->name('storeData');
Route::get('/Session/delete',[SessionController::class,'deleteSessionData'])->name('deleteData');

// Route Session cho controller: FormDNController
Route::get('/Login',[FormDNController::class,'Login'])->name('Login');
Route::post('Login',[FormDNController::class,'storeSession'])->name('storeSession');



// Route cho bảng khoa (không dùng queryBuilder)
Route::get('/khoa',[KhoaController::class,'index'])->name('khoa'); // xem
Route::get('/khoa/back',[KhoaController::class,'back'])->name('khoa.back'); // trở về

Route::get('/khoa/detail/{MaKH}', [KhoaController::class, 'detail'])->name('khoa.detail'); // xem chi tiết

Route::get('/khoa/delete/{MaKH}', [KhoaController::class, 'delete'])->name('khoa.delete'); // xoá

Route::get('/khoa/create', [KhoaController::class, 'create'])->name('khoa.create'); // thêm
Route::post('/khoa/create', [KhoaController::class, 'createSubmit'])->name('khoa.createSubmit'); // thêm

Route::get('/khoa/edit/{MaKH}', [KhoaController::class, 'edit'])->name('khoa.edit'); // Sửa


Route::post('/khoa/edit', [KhoaController::class, 'editSubmit'])->name('khoa.editSubmit'); // Sửa

// Route cho bảng sinh viên (dùng queryBuilder)
Route::get('/sinhvien',[SinhVienController::class,'index'])-> name('sinhvien.index'); // xem tất cả
Route::get('/sinhvien/detail/{mamh}',[SinhVienController::class,'detail'])-> name('sinhvien.detail'); // xem tất cả
Route::get('/sinhvien/back',[SinhVienController::class,'back'])-> name('sinhvien.back'); // trở về
Route::get('/sinhvien/create',[SinhVienController::class,'createGet'])-> name('sinhvien.createGet'); // thêm 
Route::post('/sinhvien/create',[SinhVienController::class,'createPost'])-> name('sinhvien.createPost'); // thêm 


// Route cho bảng môn học (dùng queryBuilder)
Route::get('/mon-hoc',[MonhocController::class,'getMonHocs'])-> name('monhoc.getMonHocs'); // xem tất cả
Route::get('/mon-hoc/detail/{mamh}',[MonhocController::class,'getMonHocbyId'])-> name('monhoc.getMonHocbyId'); // xem tất cả
Route::get('/mon-hoc/back',[MonhocController::class,'back'])-> name('monhoc.back'); // trở lại

Route::get('/mon-hoc/create',[MonhocController::class,'createGet'])-> name('monhoc.createGet'); // thêm
Route::post('/mon-hoc/create',[MonhocController::class,'createPost'])-> name('monhoc.createPost'); // thêm

Route::get('/mon-hoc/edit/{mamh}',[MonhocController::class,'editGet'])-> name('monhoc.editGet'); // Sửa
Route::post('/mon-hoc/edit',[MonhocController::class,'editPost'])-> name('monhoc.editPost'); // Sửa

Route::get('/mon-hoc/delete/{mamh}',[MonhocController::class,'delete'])-> name('monhoc.delete'); // Sửa

Route::post('/mon-hoc/search',[MonhocController::class,'search'])-> name('monhoc.search'); // tìm kiếm






























