<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
	protected $table = 'conteudo';

    public function obterConteudo()
    {
    	return self::select()->get();
    }
}
