<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RouteGroup extends Model {

	/**
	 * The primary key associated with the table.
	 *
	 * @var string
	 */
	protected $primaryKey = 'route_group_id';

	public $timestamp = false;

	protected $fillable = [
		'route_group_name',
	];

	public function routeGroup() {
		return $this->belongsTo(Route::class);
	}
}