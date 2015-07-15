<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class maps extends Sximo  {
	
	protected $table = 'piante';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT piante.* FROM piante  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE piante.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
