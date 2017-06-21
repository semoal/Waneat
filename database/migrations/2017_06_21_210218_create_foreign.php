<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
//device_user
Schema::table('device_user', function(Blueprint $table) {
    $table->foreign('id_user_id')->references('id')->on('users')->onDelete('cascade');
});
//menu_product
Schema::table('menu_product', function(Blueprint $table) {
    $table->foreign('id_menu_id')->references('id')->on('restaurant_menu')->onDelete('cascade');
    $table->foreign('id_product_id')->references('id')->on('restaurant_product')->onDelete('cascade');
});
//notification

//order_menu
Schema::table('order_menu', function(Blueprint $table) {
    $table->foreign('id_menu_id')->references('id')->on('restaurant_menu')->onDelete('cascade');
    $table->foreign('id_user_id')->references('id')->on('users')->onDelete('cascade');
});
//order_product
Schema::table('order_product', function(Blueprint $table) {
    $table->foreign('id_product_id')->references('id')->on('restaurant_product')->onDelete('cascade');
    $table->foreign('id_user_id')->references('id')->on('users')->onDelete('cascade');
});
//order_user_restaurant
Schema::table('order_user_restaurant', function(Blueprint $table) {
    $table->foreign('id_user_id')->references('id')->on('users')->onDelete('cascade');
});
//restaurant
Schema::table('restaurant', function(Blueprint $table) {
    $table->foreign('id_user_id')->references('id')->on('users')->onDelete('cascade');
});
//restaurant_comment
Schema::table('restaurant_comment', function(Blueprint $table) {
    $table->foreign('id_user_id')->references('id')->on('users')->onDelete('cascade');
    $table->foreign('id_restaurant_id')->references('id')->on('restaurant')->onDelete('cascade');
});
//restaurant_image
Schema::table('restaurant_image', function(Blueprint $table) {
    $table->foreign('id_restaurant_id')->references('id')->on('restaurant')->onDelete('cascade');
});
//restaurant_menu
Schema::table('restaurant_menu', function(Blueprint $table) {
    $table->foreign('id_restaurant_id')->references('id')->on('restaurant')->onDelete('cascade');
});
//resturant_payment
Schema::table('restaurant_payment', function(Blueprint $table) {
    $table->foreign('id_restaurant_id')->references('id')->on('restaurant')->onDelete('cascade');
});
//restaurant_product
Schema::table('restaurant_product', function(Blueprint $table) {
    $table->foreign('id_restaurant_id')->references('id')->on('restaurant')->onDelete('cascade');
});
//resturant_rating
Schema::table('restaurant_rating', function(Blueprint $table) {
    $table->foreign('id_user_id')->references('id')->on('users')->onDelete('cascade');
    $table->foreign('id_restaurant_id')->references('id')->on('restaurant')->onDelete('cascade');
});
//resturant_table
Schema::table('restaurant_table', function(Blueprint $table) {
    $table->foreign('id_user_id')->references('id')->on('users')->onDelete('cascade');
    $table->foreign('id_restaurant_id')->references('id')->on('restaurant')->onDelete('cascade');
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
