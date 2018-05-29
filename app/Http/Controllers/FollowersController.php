<?php

namespace App\Http\Controllers;

use App\User;
use Auth;

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
}
