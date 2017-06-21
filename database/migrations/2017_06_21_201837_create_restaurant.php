<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('restaurant', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_restaurant');
            $table->string('address_restaurant');
            $table->string('city_restaurant');
            $table->string('postalcode_restaurant');
            $table->string('country_restaurant');
            $table->string('state_restaurant');
            $table->string('description');
            $table->string('email_restaurant');
            $table->integer('id_user_id')->unsigned();
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
        Schema::dropIfExists('restaurant');
    }
}
