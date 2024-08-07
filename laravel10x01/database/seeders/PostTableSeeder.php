<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Tạo đối tượng Factory
        $faker = Faker::create();
        foreach(range(1,100) as $index)
        {
        DB::table('Post')->insert(
            [
               
                // 'MaNCC'=>$faker->word(15),
                'title'=> $faker->sentence(5),
                'body'=>$faker->paragraph(10),
                'status'=>$faker->boolean(),
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                
            ]);
}
    }
}
