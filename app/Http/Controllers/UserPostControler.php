<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostRequest;
use App\UserComment;
use App\UserPost;
use DB;
use Illuminate\Http\Request;

class UserPostControler extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function indexuser() {

		return view('UserPost.UserPost');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function storeuser(PostRequest $request) {

		$userpost = new UserPost();

		$userpost->title = request('title');
		$userpost->description = request('description');
		$userpost->file = request('file');

		$userpost->save();

		return redirect('singleUserPost');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function showdata(UserPost $userpost) {
		$userposts['userposts'] = UserPost::get();

		return view('UserPost.UserPostData', $userposts);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
	public function UserComment() {

		$users = UserPost::get();

		return view('UserPost.UserComment', $users);

	}
	public function comment(Request $request) {

		$comment = new UserComment();
		$comment->comment = request('comment');

		$comment->save();

		return redirect('commentShow');
	}

	public function commentShow(Request $request) {
		$usercomment['usercomment'] = UserComment::get();

		return view('UserPost.UserCommentView', $usercomment);
	}

	public function commentPost(Request $request) {
		$users['users'] = DB::table('user_posts')
			->rightJoin('user_comments', 'user_posts.postid', '=', 'user_comments.user_id')
			->get();

		return view('UserPost.UserIdPost', $users);
	}

}
