<?php namespace Modules\Admin\Http\Controllers;

use Modules\Admin\Http\Controllers\BaseController;

class UsuarioController extends BaseController {
	
	public function cadastrar()
	{
		return view('admin::usuarios.cadastrar');
	}
	
}