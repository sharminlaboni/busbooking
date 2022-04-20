
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Bus_id');
            $table->string('bus_type');
            $table->foreignID('route_id');
            $table->date('date');
            $table->foreignID('time_id');
            $table->string('details');          
            $table->string('image')->nullable();
            $table->double('price',10,2);
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_trips');
    }
}
