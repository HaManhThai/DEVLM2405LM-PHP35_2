<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ctpnhapTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('ctpnhap')->insert([
            'SoPn' => 'N001',
            'Mavtu' => 'DD01',
            'SLNhap' => 8,
            'DGNhap' => 25
        ]);
    }
}
