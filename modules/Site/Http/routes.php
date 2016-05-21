<?php

Route::group(['middleware' => 'web', 'prefix' => '/', 'namespace' => 'Modules\Site\Http\Controllers'], function()
{
	Route::get('/', 'SiteController@index');
	Route::get('/login-usuario', 'LoginController@login');
	Route::get('loginFacebook', 'FacebookController@login');
	Route::get('facebook', 'FacebookController@pageFacebook'); 
});