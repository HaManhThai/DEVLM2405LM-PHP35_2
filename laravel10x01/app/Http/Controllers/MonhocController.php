<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MonhocController extends Controller
{
    // đọc tất cả thông tin môn học
    public function getMonHocs(){
        $monHocs = DB::Table('Monhoc')->get();
        return view('monhoc.index', ['monHocs' => $monHocs]);
    }
    // đọc chi tiết thông tin từng môn học
    public function getMonHocbyId($mamh){
        $monHoc = DB::Table('Monhoc')->where('MaMH',$mamh)->first();
        return view('monhoc.detail', ['monHoc' => $monHoc]);
    }
    // trở lại danh sách môn học
    public function back(){
        return redirect('/mon-hoc');
    }
    // thêm mới  
    public function createGet(){
        return view('monhoc.create');
    }

    // thêm vào bảng
    public function createPost(Request $request){
        $mamh = $request->mamh;
        $tenmh = $request->tenmh;
        $sotiet = $request->sotiet;
        DB::table('monhoc')->insert(
            [
                'MaMH' => $mamh,
                'TenMH' => $tenmh,
                'Sotiet' => $sotiet
            ]
        );
        //return redirect('/mon-hoc');
        return back()->with('monhoc_created','Đã thêm thành công môn học');
    }
    // sửa
    public function editGet($mamh){
        $monHoc = DB::table('monhoc')->where('MaMH',$mamh)->first();
        return view('monhoc.edit',['monHoc' => $monHoc]);
    }

    public function editPost(Request $request){
        $tenmh = $request->tenmh;
        $sotiet = $request->sotiet;
        DB::table('monhoc')->where('MaMH',$request->mamh)->update(
            [
                'TenMH' => $tenmh,
                'Sotiet' => $sotiet
            ]
        );
        return back()->with('monhoc_edited','Đã sửa thành công môn học');
    }

    // xoá
    public function delete($mamh){
        DB::table('monhoc')->where('MaMH',$mamh)->delete();
        return back()->with('monhoc_deleted','Đã xoá thành công môn học');
    }

    public function search(Request $request){
        $monHocs = DB::table('monhoc')->where('TenMH','like','%'.$request->tenmh.'%')->get();   
        return view('monhoc.index', ['monHocs' => $monHocs]);
    }
}
