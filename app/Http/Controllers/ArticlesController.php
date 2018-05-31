<?php
namespace App\Http\Controllers;

use App\Article;
use App\ArticleReport;
use App\Category;
use App\Like;
use Auth;
use Illuminate\Http\Request;
use App\Comment;

class ArticlesController extends Controller {

	public function action(Request $request, $id) {
		// 举报
		if ($request->input('title') == 'report') {
			$article_report = new ArticleReport;
			$article_report->article_id = $id;
			$article_report->user_id = Auth::id();
			$res = $article_report->save();
			if ($res) {
				return back()->with('success', '举报成功,系统审核中');
			} else {
				return back()->with('error', '举报失败');
			}
		}

	}

	// 喜欢
	public function like(Request $request, $id) {
		if ($request->input('title') == 'like') {
			$like = new Like;
			$like->article_id = $id;
			$like->user_id = Auth::id();
			$res = $like->save();
			if ($res) {
				return back()->with('success', '喜欢成功');
			} else {
				return back()->with('error', '喜欢失败');
			}
		}
	}

	// 不喜欢
	public function unlike(Request $request, $id) {
		if ($request->input('title') == 'unlike') {
			$article = Article::find($id);
			$res = $article->articleLike(Auth::id())->delete();
			if ($res) {
				return back()->with('success', '取消喜欢成功');
			} else {
				return back()->with('error', '取消喜欢失败');
			}
		}
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$articles = Category::all();

		return view('articles.create', ['articles' => $articles]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//验证用户
		$this->validate($request, [
			'name' => 'required|min:4|max:16',
			'body' => 'required|min:20|max:255',
		], [
			'name.required' => '标题必填',
			'name.min' => '不能小于4个字',
			'name.max' => '不能大于32个字',
			'body.required' => '内容必填',
			'body.min' => '不能小于20个字',
		]);

		$data = $request->all();
		$data['user_id'] = Auth::id();
		$res = Article::create($data);
		if ($res) {
			return redirect('/')->with('success', '发表成功');
		} else {
			return back()->with('error', '发表失败');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$articles = Article::find($id);
		//获取作者信息
		$author = $articles->user;
		// 推荐感兴趣的人
		$category = $articles->category_id;
		// 获取这个分类对应作者的id
		$user_ids = $articles->where('category_id', $category)->select('user_id')->get();
		// 转化为数组
		$users_id = [];
		foreach ($user_ids as $key => $value) {
			$users_id[] = $value['user_id'];
		}

		$users = $articles->user->whereIn('id', $users_id)->get();

        $res = request() -> input('name');
        //dump($res);
        
        $uid = Auth::id();
        // dd($uid);
        $articles = Article::find($id);
        
        if($res == 'close'){
            $comments = [];
            $name='';
        }elseif($res == 'self'){
            $comments = Comment::where('user_id',$uid)->orderBy('created_at', 'desc')->paginate(5);
            $name='self';
        }else{
            $comments = Comment::where('article_id',$id)->orderBy('created_at', 'desc')->paginate(5);
            $name='';
        }

		return view('articles.show', [
			'articles' => $articles,
			'users' => $users,
			'author' => $author,
            'comments'=>$comments,
            'name' =>$name,
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
}
