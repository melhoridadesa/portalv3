<?php namespace Modules\Admin\Http\Controllers;

use Modules\Admin\Http\Controllers\BaseController;

class ConteudoController extends BaseController
{	
	public function obterConteudo()
	{
		return $this->setContent('admin::conteudo');
	}
	
}