<?php

namespace App\Http\Controllers;
use App\Article;
use App\Category;
use App\User;

use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller {
	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request) 
	{
	    $categories = Category::take(10) ->get();
	    $users = User::take(10) -> get();

	    $search = $request -> input('text','');
	    // dd($search);

	    $params = $request -> all();
	    // dd($params);

	    $articles = Article::where('name','like','%'.$search.'%') -> paginate(3);

		return view('home', [
            'categories' => $categories,
            'users' => $users,
            'articles' => $articles,
            'params' => $params
        ]);

	}
}
