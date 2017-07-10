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
          /*$table->boolean('mon');
          $table->boolean('tue');
          $table->boolean('wed');
          $table->boolean('thr');
          $table->boolean('fri');
          $table->boolean('sat');
          $table->boolean('sun');
          $table->boolean('24h');*/
          $table->string('days');
          $table->time('openSchedule');
          $table->time('closeSchedule');
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
        //
    }
}
