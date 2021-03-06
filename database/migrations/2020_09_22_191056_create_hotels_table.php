<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
			$table->string('name', 256);
			$table->foreignId('location_id')->constrained();
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
		Schema::table('hotels', function (Blueprint $table) {
			//$table->dropForeign(['location_id']);
		});
		
        Schema::dropIfExists('hotels');
    }
}
