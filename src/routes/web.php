<?php

Route::group(['namespace' => 'PinSpb\Products\Http\Controllers', 'middleware' => ['web']], function(){
    Route::get('/', 'ProductsController@index');
});
