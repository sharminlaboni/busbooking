<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Route;

class RouteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Route::create([
            'name'=>'Dhaka-Chittagong',
            
            'details'=>'route for dhaka to chittagong',

        ]);
        //
    }
}
