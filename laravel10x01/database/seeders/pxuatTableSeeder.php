<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pxuatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pxuat')->insert([
            'SoPx' => 'X001',
            'NgayXuat' => '2014-01-17',
            'TenKH' => 'Lê Hoàng Anh Tuấn'
        ]);
    }
}
