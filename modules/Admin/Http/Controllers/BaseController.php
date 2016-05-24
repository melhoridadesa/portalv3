<?php

namespace Modules\Admin\Http\Controllers;
use Pingpong\Modules\Routing\Controller;
use App\Menu as MenuBanco;

class BaseController extends Controller 
{
	protected $menu;

	public function __construct(MenuBanco $menu)
	{
		$this->menu = $menu;
	}
}