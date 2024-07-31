<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KhoaController extends Controller
{
    // xem tất cả dữ liệu 
    public function index(){
        $khoas = DB::table('khoa')->get();
        return view('khoa.index', ['khoas' => $khoas,'kitu' => '']);
    }

    // trở lại trang index
    public function back(){
        return redirect('/khoa');
    }
    
    // xem chi tiết khoa
    public function detail($MaKH){
        $khoa = DB::table('khoa')->where('MaKH',$MaKH)->get()->first();
        return view('khoa.detail', ['khoa' => $khoa]);
        
    }

    // xoá khoa
    public function delete($MaKH){
        DB::table('khoa')->where('MaKH',$MaKH)->delete();
        return redirect('/khoa')->with('khoa_deleted','Đã xoá thông tin khoa thành công'); 
    }

    // thêm mới khoa - GET
    public function create()
    {
        return view('khoa.create');
    }

    // thêm mới khoa - POST
    public function createSubmit(Request $request)
    {
        $makh = $request->input('makh');
        $tenkh = $request->input('tenkh');
        DB::table('khoa')->insert(
            [
                'MaKH' => $makh,
                'TenKH' => $tenkh
            ]
        );
        return redirect('/khoa')->with('khoa_created','Đã thêm khoa mới thành công');
    }

    // chỉnh sửa khoa - GET
    public function edit($MaKH){
        $xem_ban_ghi = DB::table('khoa')->where('MaKH',$MaKH)->get()->first();
        return view('khoa.edit',['xemBanGhi' => $xem_ban_ghi]);
        
    }

    // chỉnh sửa khoa - POST
    public function editSubmit(Request $request){
        $makh = $request->input('makh');
        $tenkh = $request->input('tenkh');
        DB::table('khoa')->where('MaKH',$makh)->update(
            [
                'TenKH' => $tenkh
            ]
        );
        return redirect('/khoa')->with('khoa_edited','Đã cập nhật thông tin khoa thành công');
    }
    
    // tìm kiếm tên khoa
    public function search(Request $request){
        $khoas = DB::table('khoa')->where('TenKH','like','%'.$request->kitutenkh.'%')->get();
        return view('khoa.index',['khoas' => $khoas,'kitu' => $request->kitutenkh]);
    }
}
