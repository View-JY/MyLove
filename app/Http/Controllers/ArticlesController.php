<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;
use App\category;
use App\User;
use Auth;
class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo '11111111';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $articles = Category::all();

          return view('articles.create',['articles'=>$articles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request ->all());
        //验证用户
        $this -> validate($request,[
            'name' => 'required|min:6|max:32',
            'body' => 'required|min:20'
        ],[
            'name.required' => '标题必填',
            'name.min' => '不能小于4个字',
            'name.max' => '不能大于32个字',
            'body.required' => '内容必填',
            'body.min' => '不能小于20个字'
        ]);

        $data = $request ->all();
        $data['user_id'] = Auth::id();
        $res = Article::create($data);
        if($res){
            return redirect('/') -> with('success','发表成功');
        }else{
            return back() -> with('error','发表失败');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id 文章ID
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articles = Article::find($id);
        $userid = $articles ->user ->id;
        $article_list = Article::where('user_id', $userid) ->limit(5) ->orderBy('created_at', 'desc') ->get();
        $category_id = $articles ->category ->id;
        $article_tj = Article::where('category_id', $category_id) ->limit(5) ->orderBy('created_at', 'desc') ->get();

        return view('articles.show',[
            'articles'=>$articles, 
            'article_list' =>$article_list,
            'article_tj' =>$article_tj
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $categorys = Category::all();

        return view('articles.edit',['article'=>$article,'categorys'=>$categorys]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);

        $article = $article ->update($request ->only(['name','body', 'category_id']));
        
        return back() -> with('success', '修改成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //删除获取的数据
        $res = Article::destroy($id);

        if($res){
            return redirect('/') -> with('success','删除成功');
        }else{
            return back() -> with('error','删除失败');
        }

    }
}
