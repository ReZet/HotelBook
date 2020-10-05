<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
			$table->foreignId('hotel_id')->constrained();
			$table->string('name', 256);
			$table->float('price', 8, 2);
			$table->string('image', 2048);
			$table->string('description', 2048);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('rooms', function (Blueprint $table) {
			$table->dropForeign(['hotel_id']);
		});
		
        Schema::dropIfExists('rooms');
    }
}
