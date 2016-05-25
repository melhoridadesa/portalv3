<?php namespace Modules\Admin\Entities;
   
use Illuminate\Database\Eloquent\Model;

class menu extends Model {

    protected $table = 'menu';

    public function obterMenu()
    {    	
    	
    	return self::select()->where('tipo_acesso', 'a')->get();	
    }
}