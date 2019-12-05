<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model {
	public $timestamp = false;

	protected $primaryKey = 'id';

	protected $fillable = [
		'route_name', 'route_group_id',
	];

	public function route() {
		return $this->hasMany(RouteGroup::class);
	}
}
