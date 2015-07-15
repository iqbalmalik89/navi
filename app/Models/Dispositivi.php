<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class dispositivi extends Sximo  {
	
	protected $table = 'dispositivi';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT dispositivi.* FROM dispositivi  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE dispositivi.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
