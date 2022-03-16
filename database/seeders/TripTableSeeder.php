<?php

namespace Database\Seeders;
use App\models\Trip;

use Illuminate\Database\Seeder;
class TripTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trip::create([
            'name'=>'trip 1',
            'route_id'=>1,
            'time'=>10.00,
            'price'=>250.0,
            'details'=>'Go to chittagong',

        ]);
        Trip::create([
            'name'=>'trip 2',
            'route_id'=>1,
            'time'=>100.00,
            'price'=>2500.0,
            'details'=>'Go to dhaka',

        ]);
    }
}
