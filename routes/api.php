<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'cars'], function () {
    Route::put('/', 'CarController@index')->name('car.index');
    Route::post('/store', 'CarController@store')->name('car.store');
    Route::put('/show/{id}', 'CarController@show')->name('car.show');
    Route::put('/update/{id}', 'CarController@update')->name('car.update');
    Route::delete('/delete/{id}', 'CarController@delete')->name('car.delete');
});