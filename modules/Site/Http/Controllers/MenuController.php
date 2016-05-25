<?php namespace Modules\Site\Http\Controllers;

use Modules\Site\Http\Controllers\BaseController;

class MenuController extends BaseController
{	
	public function obterMenu()
	{
		return view('site::menu', ['menus' => $this->menu->obterMenu()]);
	}
	
}