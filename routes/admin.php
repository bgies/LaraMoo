<?php

use Illuminate\Http\Request;


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth:admin'], function () {
   
	Route::post('dashboard', 'AdminController@getDashboard');
	
	
});


