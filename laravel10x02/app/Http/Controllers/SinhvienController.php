<?php

namespace App\Http\Controllers;
use App\Models\sinhvien;

use Illuminate\Http\Request;

class SinhvienController extends Controller
{ // sử dụng model
    // xem tất cả
    public function index(){
        $sinhviens = sinhvien::get();
        return view('sinhvien.index',['sinhviens' => $sinhviens, 'kitu' => '']);
    } 

    // xem chi tiết
    public function detail($MaSV){
        $sinhvien = sinhvien::where("MaSV",$MaSV)->get()->first();
        return view('sinhvien.detail',['sinhvien' => $sinhvien]);
    } 

    // trở lại trang sinh viên
    public function back(){
        return redirect('/sinhvien');
    } 

    // thêm sinh viên - post
    public function createGET(){
        return view('sinhvien.create');
    } 

    public function createPOST(Request $request){
        $masv = $request->masv;
        $hosv = $request->hosv;
        $tensv = $request->tensv;
        $ngaysinh = $request->ngaysinh;

        $sinhvien_create = new sinhvien;
        $sinhvien_create->MaSV = $masv;
        $sinhvien_create->HoSV = $hosv;
        $sinhvien_create->TenSV = $tensv;
        $sinhvien_create->NgaySinh = $ngaysinh;
        $sinhvien_create->save();
        return redirect('/sinhvien')->with('sv_created','Đã thêm mới sinh viên thành công !!!');
    } 

    // chỉnh sửa - get
    public function editGET($MaSV){
        $sinhvien = sinhvien::where("MaSV",$MaSV)->get()->first();
        return view('sinhvien.edit',['sinhvien' => $sinhvien]);
    } 

    // chỉnh sửa - post
    public function editPOST(Request $request){
        $masv = $request->masv;
        $hosv = $request->hosv;
        $tensv = $request->tensv;
        $ngaysinh = $request->ngaysinh;

        $sinhvien_edit = sinhvien::where('MaSV',$masv)->get()->first();
        $sinhvien_edit->MaSV = $masv;
        $sinhvien_edit->HoSV = $hosv;
        $sinhvien_edit->TenSV = $tensv;
        $sinhvien_edit->NgaySinh = $ngaysinh;
        $sinhvien_edit->save();
        return redirect('/sinhvien')->with('sv_edited','Đã chỉnh sửa sinh viên thành công !!!');
    }
    
    // xoá
    public function delete($MaSV){
       sinhvien::where("MaSV",$MaSV)->delete();
        return redirect('/sinhvien')->with('sv_deleted','Đã xoá sinh viên thành công !!!');
    } 

    // tìm kiếm sinh viên theo tên
    public function search(Request $request){
        $sinhviens = sinhvien::where('TenSV','like','%'.$request->kitutensv.'%')->get();
         return view('sinhvien.index',['sinhviens' => $sinhviens, 'kitu' => $request->kitutensv]);
     } 
    
}
