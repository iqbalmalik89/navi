<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class siti extends Sximo  {
	
	protected $table = 'siti';
	protected $primaryKey = 'id_sito';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT siti.* FROM siti  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE siti.id_sito IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
