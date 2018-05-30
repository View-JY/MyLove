<?php

namespace App\Http\Controllers;
use App\Article;
use App\Category;
use App\Dynamic;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller {
	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request) {

		$categories = Category::take(10)->get();
		$users = User::take(5) -> get();
		$articles = Article::get();

		$users = User::take(10)->get();

		$search = $request->input('text', '');

		$params = $request->all();

		$articles = Article::where('name', 'like', '%' . $search . '%')->paginate(3);

		$dynamics = Dynamic::orderBy('created_at', 'desc')->paginate(5);

		return view('home', [
			'categories' => $categories,
			'users' => $users,
			'articles' => $articles,
			'params' => $params,
			'dynamics' => $dynamics,
		]);
	}


	// 点击换一批
	public function change()
	{
		$categories = Category::take(10)->get();
		$users = User::get() ->random(5);
		$articles = Article::get();
		
		return view('home', [
			'categories' => $categories,
			'users' => $users,
			'articles' => $articles,
		]);

	}
}
