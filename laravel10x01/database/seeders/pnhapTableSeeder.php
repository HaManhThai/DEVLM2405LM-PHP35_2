<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pnhapTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pnhap')->insert([
            'SoPn' => 'N001',
            'NgaNhap' => '2012-01-17',
            'SoKH' => 'D001'
        ]);
    }
}
