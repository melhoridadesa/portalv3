<?php

namespace Modules\Admin\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Menu as MenuBanco;
use App\Conteudo as ConteudoBanco;

class BaseController extends Controller 
{

    protected $layout = 'admin::layouts.master';
    protected $menu;
    protected $conteudo;

    public function __construct(MenuBanco $menu, ConteudoBanco $conteudo)
    {
        $this->menu = $menu;
        $this->conteudo = $conteudo;
    }

    /**
     * Show the user profile.
     */
    public function setContent($view, $data = [])
    {
        
        if (!is_null($this->layout))
        {
            return view($view, $this->setDefaultParams($data));
        } else {
            throw new \Exception("Layout nao definido", 1);
        }

    }

    protected function setDefaultParams($data)
    {
    	$dataDefault['default'][]['menu'] = $this->menu->obterMenu()->toArray();
    	$dataDefault['default'][]['conteudo'] = $this->conteudo->obterConteudo()->toArray();
    	$data = (count($data) > 0 ? $data : []);
    	return array_merge($dataDefault , $data);
    }

    /**
     * Set the layout used by the controller.
     *
     * @param $name
     * @return void
     */
    protected function setLayout($name)
    {
        $this->layout = $name;
    }

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if ( ! is_null($this->layout))
        {
            $this->layout = view($this->layout);
        }
    }


    public function callAction($method, $parameters)
    {
        $this->setupLayout();

        $response = call_user_func_array(array($this, $method), $parameters);


        if (is_null($response) && ! is_null($this->layout))
        {
            $response = $this->layout;
        }

        return $response;
    }
}