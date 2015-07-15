<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class node extends Sximo  {
	
	protected $table = 'nodi';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT nodi.* FROM nodi  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE nodi.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
