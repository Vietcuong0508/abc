<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('customers')->truncate();
        DB::table('customers')->insert([
            [
                'id' => 1,
                'name' => 'Messi',
                'address' => 'Argentina',
                'created_at' => Carbon::now()
            ],[
                'id' => 2,
                'name' => 'Ronaldo',
                'address' => 'Portugal',
                'created_at' => Carbon::now()
            ],[
                'id' => 3,
                'name' => 'Gosens',
                'address' => 'Germany',
                'created_at' => Carbon::now()
            ],[
                'id' => 4,
                'name' => 'Chiesa',
                'address' => 'Italy',
                'created_at' => Carbon::now()
            ],[
                'id' => 5,
                'name' => 'Grealish',
                'address' => 'England',
                'created_at' => Carbon::now()
            ]

        ]);
    }
}
