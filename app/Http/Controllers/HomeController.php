<?php

namespace App\Http\Controllers;
use App\Article;
use App\Category;
use App\CategoryFollow;
use App\Dynamic;
use App\User;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller {
	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request) {

		$categories = Category::take(10)->get();
		$users = User::take(10)->get();

		$search = $request->input('text', '');

		$params = $request->all();

		$articleType = CategoryFollow::where('user_id', Auth::id())->get();
		$followarray = $articleType->toArray();
		$scopearray = [];
		foreach ($followarray as $follow) {
			$scopearray[] = $follow['category_id'];
		}
		$articles = Article::where('name', 'like', '%' . $search . '%')->articleType($scopearray)->paginate(5);

		$dynamics = Dynamic::orderBy('created_at', 'desc')->paginate(5);

		$otherArticles = [];
		if (!empty($scopearray)) {
			$otherArticles = Article::whereNotIn('category_id', $scopearray)->get();
		}

		return view('home', [
			'categories' => $categories,
			'users' => $users,
			'articles' => $articles,
			'otherArticles' => $otherArticles,
			'params' => $params,
			'dynamics' => $dynamics,
		]);
	}

	// 点击换一批
	public function change() {
		$categories = Category::take(10)->get();
		$users = User::get()->random(5);
		$articles = Article::get();

		return view('home', [
			'categories' => $categories,
			'users' => $users,
			'articles' => $articles,
		]);

	}
}
