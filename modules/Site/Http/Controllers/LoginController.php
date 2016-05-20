<?php namespace Modules\Site\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class LoginController extends Controller {
	
	public function login()
	{
		return view('site::login.logar');
	}
	
}