<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class nhaccTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('nhacc')->insert([
            'MaNCC' => 'A01',
            'TenNCC' => 'Lê Minh Trí',
            'Diachi' => '54 Kim Mã, Ba Đình, Hà Nội',
            'Dienthoai' => '0983142346'
            
        ]);
    }
}
