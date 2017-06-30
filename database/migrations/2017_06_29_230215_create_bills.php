<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('restaurant_bills', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('id_user_id');
          $table->integer('id_order_id');
          $table->float('total_price');
          $table->float('iva');
          $table->string('restaurant_name');
          $table->string('bill_url');
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
        Schema::table('restaurant_bills', function (Blueprint $table) {
            //
        });
    }
}
