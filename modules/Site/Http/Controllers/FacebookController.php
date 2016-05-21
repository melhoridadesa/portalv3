<?php

namespace Modules\Site\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class FacebookController extends Controller
{
	public function login()
	{
		return \Socialize::with('facebook')->redirect();
	}
	public function pageFacebook()
	{
		$user = \Socialize::with('facebook')->user();
		return response()->json($user);
	}
}