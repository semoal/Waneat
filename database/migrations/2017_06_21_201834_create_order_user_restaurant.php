<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderUserRestaurant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_user_restaurant', function (Blueprint $table) {
            $table->increments('id');
            $table->float('total_price');
            $table->float('iva');
            $table->string('payment_method');
            $table->boolean('status');
            $table->integer('id_table_id')->unsigned();
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
        Schema::dropIfExists('order_user_restaurant');

    }
}
