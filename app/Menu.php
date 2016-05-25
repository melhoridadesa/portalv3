<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	protected $table = 'menu';

    public function obterMenu($tipo_acesso)
    {
    	return self::select()->where('tipo_acesso', $tipo_acesso)->get();
    }
}