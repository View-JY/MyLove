<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use App\Follower;
use Illuminate\Http\Request;
use App\Like;

class FollowersController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}

	// 关注
	public function store(User $user) {
		if (Auth::user()->id === $user->id) {
			return redirect('/');
		}

		if (!Auth::user()->isFollowing($user->id)) {
			Auth::user()->follow($user->id);
		}

		return back()->with('success', '关注成功');
	}

	// 取消关注
	public function destroy(User $user) {
		
		if (Auth::user()->id === $user->id) {
			return redirect('/');
		}

		if (Auth::user()->isFollowing($user->id)) {
			Auth::user()->unfollow($user->id);
		}

		return back()->with('success', '取消关注成功');
	}

	// 关注用户展示
	public function index(Request $request) {
		// 我关注的人
		$me = User::find(Auth::id());
		$users = $me ->followings;
		
		// 默认显示 谁喜欢了哪篇文章
		$likes = Like::orderBy('created_at','desc') -> paginate(5);
		// dd($likes);
		return view('followers.index',[
			'users'=>$users,
			'likes'=>$likes
		]);
	}


	public function show($id)
	{		
		$user = User::find($id);
		$articles = $user ->article() -> paginate(5);
		$count = count($articles);
		$me = User::find(Auth::id());
		$users = $me ->followings;
		return view('followers.index',[
			'user'=>$user,
			'users'=>$users,
			'count'=>$count,
			'articles'=>$articles
		]);
	}
}
