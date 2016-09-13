<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tenants extends Model
{
     /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tenants';

	public static function get_tenants_with_prop() {
    	return self::select('tenants.id', 'tenants.name', 'tenants.address', 'tenants.start_date', 'tenants.end_date', 'properties.name as pname')
    	->join('properties', 'properties.id', '=', 'tenants.properties_id', 'LEFT');
    }
}
