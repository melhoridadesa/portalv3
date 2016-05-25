<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	protected $table = 'menu';

    public function obterMenu()
    {
    	return self::select()->where('tipo_acesso', 'a')->get();
    }
}
