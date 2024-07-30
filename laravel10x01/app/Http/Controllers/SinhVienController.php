<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SinhvienController extends Controller
{
    public function index(){
        $students = DB::table('SinhVien')->get();
        return view('sinhvien.index',['students' => $students]);
    }

    public function detail($mamh){
        $student = DB::table('SinhVien')->where('MaSV',$mamh)->first();
        return view('sinhvien.detail',['student' => $student]);
    }

    public function back(){
        return redirect('/sinhvien');
    }

    public function createGet(){
        return view('sinhvien.create');
    }


    public function createPost(Request $request){
        $create = DB::table('SinhVien')
        ->insert(
            ['MaSV'=> $request->masv,
            'HoSV'=> $request->hosv,
            'TenSV'=> $request->tensv,
            'NgaySinh'=> $request->ngaysinh
            ]
        );
        return redirect('/sinhvien');
    }
}
