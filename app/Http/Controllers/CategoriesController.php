<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Category;
use App\CategoryFollow;
use Auth;
use Illuminate\Http\Request;

class CategoriesController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$categories = Category::all();

		return view('categories.index', [
			'categories' => $categories,
		]);
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
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(Category $category) {
		$articles = $category->articles;

		return view('categories.show', [
			'category' => $category,
			'articles' => $articles,
		]);
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

	// 关注分类
	public function follow(Category $category) {
		$params = [
			'user_id' => Auth::id(),
			'category_id' => $category->id,
		];

		CategoryFollow::firstOrCreate($params);

		return back()->with('success', '关注成功');
	}

	// 取消关注分类
	public function unfollow(Category $category) {
		$category->categoryFollow(Auth::id())->delete();

		return back()->with('success', '取消关注成功');
	}
}
