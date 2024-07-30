<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KhoaController extends Controller
{
    // xem dữ liệu 
    public function index(){
        
        $khoas = DB::select('select * from khoa where 1');
 
        return view('khoa.khoa', ['khoas' => $khoas]);
    }

    public function back(){
        return redirect('/khoa');
    }
    
    public function detail($MaKH){
        $khoa = DB::select('select * from khoa where makh = ?',[$MaKH]); 
 
        return view('khoa.detail', ['khoa' => $khoa[0]]);
        
    }

    public function delete($MaKH){
        DB::delete('delete from khoa where makh = ?',[$MaKH]); 
        return redirect('/khoa'); 
    }

    // get: Create Form
    public function create()
    {
        return view('khoa.create');
    }
    // post: Create Form Submit
    public function createSubmit(Request $request)
    {
        // return $request->all();
        $makh = $request->input('makh');
        $tenkh = $request->input('tenkh');
        $them_khoa = DB::insert('insert into khoa values(?,?)', [$makh,$tenkh]); 
 
        return redirect('/khoa');
        
    }

    public function edit($MaKH){
        $xem_ban_ghi = DB::select('select * from khoa where MaKH = ?',[$MaKH])[0];
        return view('khoa.edit',['xemBanGhi' => $xem_ban_ghi]);
        // echo "<pre>";
        // return print_r($xem_ban_ghi);
    }

    public function editSubmit(Request $request){
        $makh = $request->input('makh');
        $tenkh = $request->input('tenkh');
        DB::update('UPDATE khoa SET TenKH=? WHERE MaKH=?',[$tenkh,$makh]);
        return redirect('/khoa');
    }
    
}
