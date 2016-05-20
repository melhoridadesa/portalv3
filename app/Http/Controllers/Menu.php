<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Menu as MenuBanco;

class Menu extends Controller
{
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
