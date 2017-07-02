<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantSchedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('restaurant_schedule', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('id_restaurant_id')->unsigned();
          $table->string('day');
          $table->boolean('open');
          $table->time('hour1');
          $table->time('hour2');
          $table->time('hour3');
          $table->time('hour4');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
