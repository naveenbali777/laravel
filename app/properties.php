<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class properties extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'properties';

	public static function properties_data() {
        return self::select('id', 'name')
        		->lists('name', 'id');
    }
}
