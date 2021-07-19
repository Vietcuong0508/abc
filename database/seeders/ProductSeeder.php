<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Bánh mì Pate',
                'price' => 20000,
                'created_at' => Carbon::now()
            ],[
                'id' => 2,
                'name' => 'Nước lọc Ronaldo',
                'price' => 10000,
                'created_at' => Carbon::now()
            ],[
                'id' => 3,
                'name' => 'Sữa TH True Milk',
                'price' => 30000,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'name' => 'Coca cola',
                'price' => 13000,
                'created_at' => Carbon::now()
            ],[
                'id' => 5,
                'name' => 'Monster Energy',
                'price' => 20000,
                'created_at' => Carbon::now()
            ],[
                'id' => 6,
                'name' => 'Bánh mì Sandwich',
                'price' => 16000,
                'created_at' => Carbon::now()
            ],[
                'id' => 7,
                'name' => 'Gói Rong biển',
                'price' => 50000,
                'created_at' => Carbon::now()
            ],[
                'id' => 8,
                'name' => 'Nấm kim châm',
                'price' => 6000,
                'created_at' => Carbon::now()
            ],[
                'id' => 9,
                'name' => 'Mỳ gói Hảo Hảo',
                'price' => 2500,
                'created_at' => Carbon::now()
            ],[
                'id' => 10,
                'name' => 'Bia Heineken',
                'price' => 19000,
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
