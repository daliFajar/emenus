<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    var_dump(Config::get('app.locale'));
});



Route::group(['prefix' => '{locale}'], function () {

    /*
    * Authentication
    */
    Route::group(['prefix' => config('app.auth_code')], function () {
        Route::get('login', 'Auth\LoginController@getLogin')->name('form.login');
    });

});
