<?php namespace Modules\Site\Entities;
   
use Illuminate\Database\Eloquent\Model;

class menu extends Model {

    protected $table = 'menu';

    public function menu() {
    	return self::select()->get();
    }
}