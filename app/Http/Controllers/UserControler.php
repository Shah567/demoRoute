<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\UserPost;
use DB;
use App\User;
use Illuminate\Http\Request;

class UserControler extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('User.UserReg');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$users['users'] = User::latest()->first();
		return view('User.singleUser',$users);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(UserRequest $request) {

		$user = new User();
		$user->name = request('name');
		$user->userid = request('userid');
		$user->email = request('email');
		$user->password = request('password');
		$user->mobile = request('mobile');

		$user->save();
		return redirect('create');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(User $user) {
		$users['users'] = User::get();

		return view('User.UserData', $users);

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
		echo "hello";
	}
 

	
	public function singleUserPost(Request $request){
		$userposts['userposts'] = UserPost::latest()->first( );
		return view('User.singledata', $userposts);
	}

}
