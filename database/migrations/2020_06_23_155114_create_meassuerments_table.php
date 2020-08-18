<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeassuermentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meassuerments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('humudity');
            $table->text('temprature');
            $table->text('water_content');
            $table->text('soil_moisture1');
            $table->text('soil_moisture2');
            $table->text('smoke');
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
        Schema::dropIfExists('meassuerments');
    }
}
