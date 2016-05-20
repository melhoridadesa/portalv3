<?php namespace Modules\Site\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class SiteController extends Controller {
	
	public function index()
	{
		return view('site::index');
	}
	
}