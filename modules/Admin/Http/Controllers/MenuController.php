<?php namespace Modules\Admin\Http\Controllers;

use Modules\Admin\Http\Controllers\BaseController;

class MenuController extends BaseController
{	
	public function obterMenu()
	{
		return view('admin::menu', ['menus' => $this->menu->obterMenu()]);
	}
	
}