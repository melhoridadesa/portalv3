<?php namespace Modules\Site\Http\Controllers;

use Modules\Site\Http\Controllers\BaseController;

class SiteController extends BaseController {
	
	public function index()
	{
		return $this->setContent('site::conteudo');
	}
	
}

