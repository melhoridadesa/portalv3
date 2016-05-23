<?php namespace Modules\Admin\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use App\Menu as MenuBanco;

class MenuController extends Controller {

	protected $menu;

	public function __construct(MenuBanco $menu)
	{
		$this->menu = $menu;
	}
	
	public function obterMenu()
	{
		return view('menu', ['menus' => $this->menu->obterMenu()]);
	}
	
}