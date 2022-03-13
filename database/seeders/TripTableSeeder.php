<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TripTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        product::create([
            'name'=>'product 1',
            'route_id'=>1,
            'quantity'=>10,
            'price'=>20.0,
            'details'=>'test',

        ]);
    }
}
