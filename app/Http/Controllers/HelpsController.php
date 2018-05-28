<?php

namespace App\Http\Controllers;

use App\Help;
use Auth;
use Illuminate\Http\Request;

class HelpsController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('help.index');
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
	public function store(Request $request, Help $help) {
		$this->validate($request, [
			'idea' => 'required|min:5',
			'email' => 'required|email',
		], [
			'idea.required' => '请您填写意见建议',
			'idea.min' => '意见建议字数太少啦',
			'email.required' => '邮箱地址不能为空偶',
			'email.email' => '邮箱地址不正确偶',
		]);

		$data = $request->only(['idea', 'email']);

		if (Auth::check()) {
			$data['user_id'] = Auth::id();
		}

		$help->create($data);

		return back()->with('success', '提交成功，谢谢您对我们工作的支持!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
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
		//
	}
}
