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
            $table->timestamps();
			$table->foreignId('hotel_id')->constrained();
			$table->string('last_name', 256);
			$table->string('first_name', 256);
			$table->string('phone_number', 256);
			$table->string('email', 256);
			$table->date('check_in');
			$table->date('checkout');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::create('bookings', function (Blueprint $table) {
			$table->dropForeign(['hotel_id']);
		});
		
        Schema::dropIfExists('bookings');
    }
}
