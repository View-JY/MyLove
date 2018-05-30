<?php

namespace App\Http\Controllers;
use App\Article;
use App\Category;
use App\User;
use Auth;
use App\Dynamic;

class HomeController extends Controller {
	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() 
	{
	    $categories = Category::take(10) ->get();
	    $users = User::take(10) ->get();
 		// dd($users);
 		
	    $articles = Article::get();
	    $dynamics = Dynamic::limit(5)->get();
	    //dd($dynamics);

	    

		return view('home', [
            'categories' => $categories,
            'users' => $users,
            'articles' => $articles,
           	'dynamics' => $dynamics,
        ]);
	}
}
