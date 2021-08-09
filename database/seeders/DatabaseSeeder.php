<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            ProductSeeder::class,
            CustomerSeeder::class,
            OrderSeeder::class,
            OrderDetailSeeder::class,
            EventSeeder::class,
            ApartmentSeeder::class,
            LibrarySeeder::class,
        ]);
    }
}
