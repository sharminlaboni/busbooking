<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class catagoryTableseeder extends Seeder
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
        catagory::create([

            //db coloum name || value 
            'name'=>'woohgg',
            'details' =>'uuuyyugftttgtiti'
        ]);
             
        
    }
}
