<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VaTTuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('vattu')->insert(
            [ // mỗi lần lên dc 1 bản ghi
                'MaVTu'=>'DD01',
                'TenVTu'=>'Đầu DVD Hitachi 3 cửa',
                'DvTinh'=>'Bộ',
                'PhanTram'=>40
            ]
        );
    }
}
