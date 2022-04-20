<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            
            $table->integer('user_id');
            $table->integer('trip_id');
            $table->string('seat_number');
            $table->date('date');
            $table->integer('counter_id');
            $table->string('booking_status')->default('pending');
            $table->string('tran_id');
            
            $table->double('totalAmount');
            
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
        Schema::dropIfExists('_bookings');
    }
}
