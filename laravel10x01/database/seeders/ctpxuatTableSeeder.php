<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ctpxuatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('ctpxuat')->insert([
            'SoPx' => 'X001',
            'Mavtu' => 'DD01',
            'SLXuat' => 8,
            'DGXuat' => 9
        ]);
    }
}
