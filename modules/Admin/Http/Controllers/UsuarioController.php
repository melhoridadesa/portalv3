<?php namespace Modules\Admin\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class UsuarioController extends Controller {
	
	public function cadastrar()
	{
		return view('admin::usuarios.cadastrar');
	}
	
}