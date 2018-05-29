<?php

namespace App\Http\Controllers;

use App\User;
use App\UserInfo;
use Auth;
use Illuminate\Http\Request;

class UsersController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request, User $user) {
		$name = [];
		if ($request->Method() == 'GET') {
			$name = $request->input('name');
		}
		//获取用户数据
		$users = $user->author($name)->get();
		//加载模板 分配数据
		return view('users.index', ['users' => $users]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {

		$user = User::find(Auth::id());

		if (isset($user->userInfo->user_id) && $user->userInfo->user_id) {
			$data = $user->userInfo->where('user_id', Auth::id())->first();
			return view('users.create', ['user' => $user, 'data' => $data]);
		}
		return view('users.create', ['user' => $user]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {

		$id = Auth::id();
		$user = User::find($id);
		// 如果已经有对应的数据,则提交后修改
		if (isset($user->userInfo->user_id) && $user->userInfo->user_id) {
			$data = $request->except('name');
			$res = $user->userInfo->update($data);
			if ($res) {
				return back()->with('success', '修改成功');
			} else {
				return back()->with('error', '修改失败');
			}
		} else {
			// 否则,添加新数据
			$name = $request->input('name');
			$user->name = $name;
			$data = $request->except('_token', 'name');
			$data['user_id'] = $id;
			$user->userInfo()->create($data);
			$res = $user->save();
			if ($res) {
				return back()->with('success', '保存成功');
			} else {
				return back()->with('error', '保存失败');
			}
		}

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit(User $user) {
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
		$data = $request->except('_token', '_method', 'name');
		$user = User::find($id);
		$res = $user->userInfo()->update($data);
		if ($res) {
			return back()->with('success', '修改成功');
		} else {
			return back()->with('error', '修改失败');
		}
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
}
