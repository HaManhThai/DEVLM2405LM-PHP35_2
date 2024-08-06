<?php

namespace App\Http\Controllers;
use App\Models\Khoa;
use Illuminate\Http\Request;

class Khoa1 extends Controller
{
    //thao tác với Model Khoa {app/models/khoa.php}
    public function getAllKhoa(){
        $khoas = Khoa::all();
        // return $khoas;
        return view('khoa1.index',['khoas' => $khoas]);
    }

    public function getKhoaByMaKH($makh){
        $khoa = Khoa::where('MaKH',$makh)->first();
        // return $khoas;
        return view('khoa1.detail',['khoa' => $khoa]);
    }

    public function back(){
        return redirect('/khoa1');
    }
    //thêm - GET
    public function createKhoaGET(){
        return view('khoa1.create');
    }

    //thêm - POST

    public function createKhoaPOST(Request $request){
        $khoa = new Khoa;
        $khoa->MaKH = $request->makh;
        $khoa->TenKH = $request->tenkh;
        $khoa->save(); 

        // Khoa::create(
        //     [
        //         'MaKH' => $request->makh,
        //         'TenKH' => $request->tenkh
        //     ]
        // );

        return redirect('/khoa1')->with('khoa_created','Đã thêm mới khoa thành công !');
    }

    // sửa - GET
    public function editKhoaGET($makh){
        $khoaEdit = Khoa::where('MaKH',$makh)->first();
        return view('khoa1.edit',['khoaEdit' => $khoaEdit]);
    }

    // sửa - POST

    public function editKhoaPOST(Request $request){
        $khoaEdit = Khoa::where("MaKH",$request->makh)->first();
        $khoaEdit->MaKH = $request->makh;
        $khoaEdit->TenKH = $request->tenkh;
        $khoaEdit->save();
        return redirect('/khoa1')->with('khoa_edited','Đã sửa thông tin khoa thành công !');
    }

        
    public function deleteKhoa($makh){
        Khoa::where("MaKH",$makh)->delete();
        
        return redirect('/khoa1')->with('khoa_deleted','Đã xoá khoa thành công !');
    }
   

}
