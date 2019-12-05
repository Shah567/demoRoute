<?php

namespace App\Http\Controllers;
use App\Http\Requests\RouteGroupRequest;
use App\RouteGroup;
use DB;
use Illuminate\Http\Request;

class RouteGroupController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function indexRouteGroup() {

		$routes['routes'] = RouteGroup::get();
		return view('Route.routeGroup', $routes);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function storeRouteGroup(RouteGroupRequest $request) {
		$routeGroup = RouteGroup::create([
			'route_group_name' => $request->route_group_name,
		]);
		$routeGroup->save();

		return redirect('indexRouteGroup');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function showRouteGroup(Request $request) {

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function editRouteGroup($route_group_id) {
		$routes = RouteGroup::find($route_group_id);

		return view('Route.edit', compact('routes'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function updateRouteGroup(Request $request, $route_group_id) {
		$routes = RouteGroup::find($route_group_id);
		$routes->route_group_name = $request->get('route_group_name');
		$routes->save();
		return redirect('indexRouteGroup');
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroyRouteGroup($route_group_id) {
		$user = new RouteGroup();
		DB::table('route_groups')->where(['route_group_id' => $route_group_id])->delete();
		return redirect('indexRouteGroup');
	}

}
