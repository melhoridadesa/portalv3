<?php

Route::group(['middleware' => 'web', 'prefix' => '/', 'namespace' => 'Modules\Site\Http\Controllers'], function()
{
	Route::get('/', 'SiteController@index');
	Route::get('/1', 'MenuController@obterMenu');
	Route::get('/login-usuario', 'LoginController@login');
	Route::get('/quem-somos', 'QuemSomosController@quemSomos');
	Route::get('loginFacebook', 'FacebookController@login');
	Route::get('facebook', 'FacebookController@pageFacebook'); 
});