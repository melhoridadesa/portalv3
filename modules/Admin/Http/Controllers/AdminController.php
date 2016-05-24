<?php namespace Modules\Admin\Http\Controllers;

use Modules\Admin\Http\Controllers\BaseController;

class AdminController extends BaseController {
	
	public function index()
	{
		return view('admin::index');
	}
	
}