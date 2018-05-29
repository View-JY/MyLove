<?php

namespace App\Http\Controllers;
use App\Article;
use App\Category;
use App\User;

class HomeController extends Controller {
	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$categories = Category::take(10)->get();
		$users = User::take(10)->get();

		$articles = Article::get();

		return view('home', [
			'categories' => $categories,
			'users' => $users,
			'articles' => $articles,
		]);
	}
}
