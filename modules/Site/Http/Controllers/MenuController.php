<?php 
namespace Modules\Site\Http\Controllers;
use Modules\Site\Entities\Menu as MenuBanco;
use Pingpong\Modules\Routing\Controller;



class MenuController extends Controller{
	protected $menu;

	public function __construct(MenuBanco $menu)
	{
		$this->menu = $menu;
	}

    public function obterMenu()
    {
    	return view('site::menu', ['menus' => $this->menu->menu()]);
    }
}