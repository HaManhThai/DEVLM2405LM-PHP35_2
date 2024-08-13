<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dondhTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('dondh')->insert([
            'SoDH' => 'AA01',
            'NgayDH' => '2012-01-15',
            'MaNCC' => 'A01'
        ]);
        
    }
}
