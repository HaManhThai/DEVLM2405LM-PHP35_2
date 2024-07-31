<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SinhvienController extends Controller
{
    public function index(){
        $students = DB::table('sinhvien')->get();
        return view('sinhvien.index',['students' => $students,'kitu' => ""]);
    }

    public function detail($mamh){
        $student = DB::table('sinhvien')->where('MaSV',$mamh)->first();
        return view('sinhvien.detail',['student' => $student]);
    }

    public function back(){
        return redirect('/sinhvien');
    }

    public function createGet(){
        return view('sinhvien.create');
    }


    public function createPost(Request $request){
        $create = DB::table('sinhvien')
        ->insert(
            ['MaSV'=> $request->masv,
            'HoSV'=> $request->hosv,
            'TenSV'=> $request->tensv,
            'NgaySinh'=> $request->ngaysinh
            ]
        );
        //return back('/sinhvien');
        return redirect('/sinhvien')->with('sinhvien_created', 'Đã thêm sinh viên thành công');
    }

    public function editGet($masv){
        $sinhvien = DB::table('sinhvien')->where('MaSV',$masv)->get()->first();
        return view('sinhvien.edit',['sinhvien' => $sinhvien]);
    }


    public function editPost(Request $request){
        DB::table('sinhvien')->where('MaSV',$request->masv)->update
        (
            [
            'HoSV'=> $request->hosv,
            'TenSV'=> $request->tensv,
            'NgaySinh'=> $request->ngaysinh
            ]
        );
        //return back('/sinhvien');
        return redirect('/sinhvien')->with('sinhvien_edited', 'Đã sửa thông tin sinh viên thành công');
    }
    // xoá
    public function delete($masv){
        DB::table('sinhvien')->where('MaSV',$masv)->delete();
        return redirect('/sinhvien')->with('sinhvien_deleted', 'Đã xoá thông tin sinh viên thành công');
    }

    public function search(Request $request){
        $student = DB::table('sinhvien')->where('TenSV','like','%'.$request->kitutensv.'%')->get();
        return view('sinhvien.index',['students' => $student,'kitu' => $request->kitutensv]);
    }
}
