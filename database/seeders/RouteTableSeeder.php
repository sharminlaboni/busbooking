<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RouteTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        catagory::create([

            //db coloum name || value 
            'name'=>'wood',
            'details' =>'uuuyyuiti'
        ]);
        Route::create([

            //db coloum name || value 
            'name'=>'woohgg',
            'details' =>'uuuyyugftttgtiti'
        ]);
             
        
    }
}
