<?php

namespace App\Http\Controllers;
use App\Http\Requests\RouteRequest;
use App\Route;
use App\RouteGroup;
use DB;
use Illuminate\Http\Request;

class RouteController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		$routes['routes'] = DB::table('routes')
			->join('route_groups', 'routes.id', '=', 'route_groups.route_group_id')->get();

		return view('Route.showAllRoute', $routes);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function createRoute() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function storeRoute(RouteRequest $request) {
		$routes = new Route;
		$routes->route_group_id = request('route_group_id');
		$routes->route_name = request('route_name');
		$routes->save();
		return redirect('index');
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function showRoute($route_group_id) {
		$routes = RouteGroup::find($route_group_id);
		return view('Route.route', compact('routes'));

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$routes = new Route();

		$data = DB::table('routes')->delete($id);
		return redirect('index');
	}
}
