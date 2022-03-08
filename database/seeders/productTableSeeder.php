<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class productTableseeder extends Seeder
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
            'catagory_id'=>1,
            'quantity'=>10,
            'price'=>20.0,
            'details'=>'test',

        ]);
    }
}
