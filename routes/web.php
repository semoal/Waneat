<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Página principal www.url.com/
Route::get('/', function () {
    return view('landing');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function() {

  Route::get('/home', 'HomeController@index')->name('home');

  Route::resource('restaurant', 'RestaurantController');

  Route::get('/image/{image}/remove', 'RestaurantController@destroyImage')->name('restaurant.destroyImage');

});

Route::group(['middleware' => 'exist.restaurant'], function() {
  Route::resource('table', 'TableController');
  Route::resource('menu', 'MenuController');
});

Route::group(['middleware' => ['api.token']], function () {

});

Route::get('/api/restaurant/{id}', 'Api\RestaurantController@show');
Route::get('/api/restaurant', 'Api\RestaurantController@showAll');
Route::get('/api/showUserRestaurants', 'Api\RestaurantController@showUserRestaurants');
Route::get('/api/getTables/{id}', 'Api\TableController@getTables');
Route::post('/api/destroyTables', 'Api\TableController@destroyTables');
Route::post('/api/putTables', 'Api\TableController@putTables');
