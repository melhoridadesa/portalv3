<?php namespace Modules\Site\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Site\Http\Requests;
use Modules\Site\Entities\Menu as MenuBanco;

class SiteController extends Controller {
	
	protected $menu;

	public function __construct(MenuBanco $menu)
	{
		$this->menu = $menu;
	}
	
	public function index()
	{
		return view('site::index', ['menus' => $this->menu->menu()]);
	}


}


