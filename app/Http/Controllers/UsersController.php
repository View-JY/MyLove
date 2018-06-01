<?php

namespace App\Http\Controllers;

use App\User;
use App\UserInfo;
use App\Article;
use App\comment;
use Auth;
use Illuminate\Http\Request;

class UsersController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request, User $user) {
		// 最热门作者
		// if($request -> input('title') == 'hot'){
		// 	$name = [];
		// 	if ($request->Method() == 'GET') {
		// 		$name = $request->input('name');
		// 	}
		// 	//获取用户数据
		// 	$users = $user->author($name) -> orderBy('created_at','asc')->get();
		// 	dd($users);
		// }
		$name = [];
		if ($request->Method() == 'GET') {
			$name = $request->input('name');
		}
		//获取用户数据
		$users = User::all();
		// dd($users ->article);
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
		$this->validate($request, [
			'name' => 'required',
			'phone' => 'required|regex:/^1{1}[3-9]{1}\d{9}$/',
			'position' => 'required',
			'address' => 'required',
			'intro' => 'required',
			'url' => 'required',
		], [
			'name.required' => '用户名不能为空',
			'phone.required' => '手机号不能为空',
			'phone.regex' => '手机号格式不正确',
			'position.required' => '请填写您的职位',
			'address.required' => '请填写您的地址',
			'intro.required' => '请填写您的个人简介',
			'url.required' => '请填写您的个人主页',
		]);

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
	public function show($id) 
	{
		//当前页面跳转
		$table = request() ->input('tab') ? request() ->input('tab') : 'article';
		//已数组的形式获取数据,分页的时候用
		$params = request() ->all();
		//获取作者所有信息
 		$users = User::find($id);
 		//获取最新文章信息
 		$articles = $users ->article() ->orderBy('created_at', 'desc') ->paginate(3);
 		//获取最新评论信息
 		$comments = $users ->comment() ->orderBy('created_at', 'desc') ->paginate(3);	
 		//获取最新吐槽信息
 		$dynamics = $users ->dynamic() ->orderBy('created_at', 'desc') ->paginate(3);		
 		//获取我的喜欢信息
 		$likes = $users -> like() ->orderBy('created_at', 'desc') ->paginate(3);
 		
		return view('users.show', 
		[
			'table' => $table,
			'users' =>$users,
			'articles' =>$articles,
			'comments' =>$comments,
			'dynamics' =>$dynamics,
			'params' =>$params,
			'likes' =>$likes
		]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit(User $user) {

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
}
