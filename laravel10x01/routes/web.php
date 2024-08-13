<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KhoaController;
use App\Http\Controllers\Khoa1;
use App\Http\Controllers\SinhVienController;
use App\Http\Controllers\MonhocController;
use App\Http\Controllers\FormDKController;
use App\Http\Controllers\FormDNController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostsController;
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



// Route cho bảng khoa (dùng queryBuilder)
Route::get('/khoa',[KhoaController::class,'index'])->name('khoa'); // xem
Route::get('/khoa/back',[KhoaController::class,'back'])->name('khoa.back'); // trở về

Route::get('/khoa/detail/{MaKH}', [KhoaController::class, 'detail'])->name('khoa.detail'); // xem chi tiết

Route::get('/khoa/delete/{MaKH}', [KhoaController::class, 'delete'])->name('khoa.delete'); // xoá

Route::get('/khoa/create', [KhoaController::class, 'create'])->name('khoa.create'); // thêm
Route::post('/khoa/create', [KhoaController::class, 'createSubmit'])->name('khoa.createSubmit'); // thêm

Route::get('/khoa/edit/{MaKH}', [KhoaController::class, 'edit'])->name('khoa.edit'); // Sửa
Route::post('/khoa/edit', [KhoaController::class, 'editSubmit'])->name('khoa.editSubmit'); // Sửa

Route::post('/khoa', [KhoaController::class, 'search'])->name('khoa.search'); // Tìm kiếm




// Route cho bảng sinh viên (dùng queryBuilder)
Route::get('/sinhvien',[SinhVienController::class,'index'])-> name('sinhvien.index'); // xem tất cả
Route::get('/sinhvien/detail/{mamh}',[SinhVienController::class,'detail'])-> name('sinhvien.detail'); // xem chi tiết

Route::get('/sinhvien/back',[SinhVienController::class,'back'])-> name('sinhvien.back'); // trở về

Route::get('/sinhvien/create',[SinhVienController::class,'createGet'])-> name('sinhvien.createGet'); // thêm 
Route::post('/sinhvien/create',[SinhVienController::class,'createPost'])-> name('sinhvien.createPost'); // thêm 

Route::get('/sinhvien/edit/{masv}',[SinhVienController::class,'editGet'])-> name('sinhvien.editGet'); // sửa  
Route::post('/sinhvien/edit',[SinhVienController::class,'editPost'])-> name('sinhvien.editPost'); // sửa 

Route::get('/sinhvien/delete/{masv}',[SinhVienController::class,'delete'])-> name('sinhvien.delete'); // xoá

Route::post('/sinhvien',[SinhVienController::class,'search'])-> name('sinhvien.search'); // tìm kiếm 





// Route cho bảng môn học (dùng queryBuilder)
Route::get('/mon-hoc',[MonhocController::class,'getMonHocs'])-> name('monhoc.getMonHocs'); // xem tất cả
Route::get('/mon-hoc/detail/{mamh}',[MonhocController::class,'getMonHocbyId'])-> name('monhoc.getMonHocbyId'); // xem tất cả
Route::get('/mon-hoc/back',[MonhocController::class,'back'])-> name('monhoc.back'); // trở lại

Route::get('/mon-hoc/create',[MonhocController::class,'createGet'])-> name('monhoc.createGet'); // thêm
Route::post('/mon-hoc/create',[MonhocController::class,'createPost'])-> name('monhoc.createPost'); // thêm

Route::get('/mon-hoc/edit/{mamh}',[MonhocController::class,'editGet'])-> name('monhoc.editGet'); // Sửa
Route::post('/mon-hoc/edit',[MonhocController::class,'editPost'])-> name('monhoc.editPost'); // Sửa

Route::get('/mon-hoc/delete/{mamh}',[MonhocController::class,'delete'])-> name('monhoc.delete'); // Sửa

Route::post('/mon-hoc',[MonhocController::class,'search'])-> name('monhoc.search'); // tìm kiếm


# Model cho bảng khoa 
Route::get('/khoa1',[Khoa1::class,'getAllKhoa'])-> name('khoa.get'); // lấy all
Route::get('/khoa1/detail/{makh}',[Khoa1::class,'getKhoaByMaKH'])-> name('khoa.detail'); // xem chi tiết

Route::get('/khoa1/back',[Khoa1::class,'back'])-> name('khoa1.back'); // trở lại

Route::get('/khoa1/create',[Khoa1::class,'createKhoaGET'])-> name('khoa.createKhoaGET'); // thêm - GET    
Route::post('/khoa1/create',[Khoa1::class,'createKhoaPOST'])-> name('khoa.createKhoaPOST'); // thêm - POST

Route::get('/khoa1/edit/{makh}',[Khoa1::class,'editKhoaGET'])-> name('khoa.editKhoaGET'); // sửa - GET    
Route::post('/khoa1/edit',[Khoa1::class,'editKhoaPOST'])-> name('khoa.editKhoaPOST'); // sửa - POST

Route::get('/khoa1/delete/{makh}',[Khoa1::class,'deleteKhoa'])-> name('khoa.deleteKhoa'); // xoá    


Route::get('/posts', [PostsController::class,'index'])->name('posts.index');

Route::get('/posts/create', [PostsController::class,'createGET'])->name('posts.createGET');
Route::post('/posts/create', [PostsController::class,'createPOST'])->name('posts.createPOST');

Route::get('/posts/edit/{id}', [PostsController::class,'editGET'])->name('posts.editGET');
Route::post('/posts/edit/{id}', [PostsController::class,'editPOST'])->name('posts.editPOST');

Route::get('/posts/back', [PostsController::class,'back'])->name('posts.back');

Route::get('/posts/delete/{id}', [PostsController::class,'delete'])->name('posts.delete');

Route::get('/posts/detail/{id}', [PostsController::class,'detail'])->name('posts.detail');






# UP FILE : move / store


































