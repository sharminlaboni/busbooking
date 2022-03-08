<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this ->call(catagoryTableSeeder::class);
        $this ->call(productTabledSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
