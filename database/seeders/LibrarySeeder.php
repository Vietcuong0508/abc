<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('libraries')->truncate();
        DB::table('libraries')->insert([
            [
                'authorid' => 1,
                'title' => 'DẾ MÈN PHIÊU LƯU KÝ 1',
                'ISBN' => '9786042036597',
                'pub_year' => '1986',
                'available' => 4,
            ],[
                'authorid' => 3,
                'title' => 'DẾ MÈN PHIÊU LƯU KÝ 2',
                'ISBN' => '9786042036597',
                'pub_year' => '1986',
                'available' => 4,
            ],[
                'authorid' => 2,
                'title' => 'DẾ MÈN PHIÊU LƯU KÝ 3',
                'ISBN' => '9786042036597',
                'pub_year' => '1986',
                'available' => 4,
            ],[
                'authorid' => 4,
                'title' => 'DẾ MÈN PHIÊU LƯU KÝ 4',
                'ISBN' => '9786042036597',
                'pub_year' => '1986',
                'available' => 4,
            ],[
                'authorid' => 6,
                'title' => 'DẾ MÈN PHIÊU LƯU KÝ 5',
                'ISBN' => '9786042036597',
                'pub_year' => '1986',
                'available' => 4,
            ],[
                'authorid' => 1,
                'title' => 'DẾ MÈN PHIÊU LƯU KÝ 6',
                'ISBN' => '9786042036597',
                'pub_year' => '1986',
                'available' => 4,
            ],
        ]);
    }
}
