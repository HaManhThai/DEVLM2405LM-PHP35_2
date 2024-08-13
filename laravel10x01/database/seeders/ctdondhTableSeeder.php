<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ctdondhTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('ctdondh')->insert([
            'SoDH' => 'AA01',
            'Mavtu' => 'DD01',
            'SlDat' => 40
        ]);
    }
}
