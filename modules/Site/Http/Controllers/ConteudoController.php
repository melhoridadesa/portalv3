<?php namespace Modules\Site\Http\Controllers;

use Modules\Site\Http\Controllers\BaseController;

class ConteudoController extends BaseController
{	
	public function obterConteudo()
	{
		return $this->setContent('site::conteudo');
	}
	
}