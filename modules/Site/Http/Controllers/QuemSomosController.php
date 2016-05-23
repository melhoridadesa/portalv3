<?php namespace Modules\Site\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class QuemSomosController extends Controller {
	
	public function quemSomos()
	{
		return view('site::quemSomos.quemSomos');
	}
	
}