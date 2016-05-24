<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
	Route::get('/', 'AdminController@index');
	//Route::get('/', 'MenuController@obterMenu');	
	Route::get('/', 'ConteudoController@obterConteudo');
	Route::get('/cadastro-usuario', 'UsuarioController@cadastrar');

});