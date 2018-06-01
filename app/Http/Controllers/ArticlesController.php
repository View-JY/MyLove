<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;
use Auth;
use App\ArticleReport;
use App\Like;
use App\Comment;
use App\User;
use App\CommentReport;
use App\CommentZan;

class ArticlesController extends Controller
{
    
    public function action(Request $request,$id)
    {       
        // 举报
        if($request->input('title') == 'report'){ 
            $article_report = new ArticleReport;
            $article_report -> article_id = $id;
            $article_report -> user_id = Auth::id();
            $res = $article_report -> save();
            if($res){
                return back() -> with('success','举报成功,系统审核中');
            }else{
                return back() -> with('error','举报失败');
            }
        }

    }


    // 喜欢
    public function like(Request $request,$id)
    {        
        if($request -> input('title') == 'like'){
            $like = new Like;
            $like -> article_id = $id;
            $like -> user_id = Auth::id();
            $res = $like -> save();
            if($res){
                return back() -> with('success','喜欢成功');
            }else{
                return back() -> with('error','喜欢失败');
            }
        }
    }

    // 不喜欢
    public function unlike(Request $request,$id)
    {
        if($request -> input('title') == 'unlike'){
            $article = Article::find($id);
            $res = $article -> articleLike(Auth::id()) ->delete();
            if($res){
                return back() -> with('success','取消喜欢成功');
            }else{
                return back() -> with('error','取消喜欢失败');
            }
        }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $res = $request -> input('name');
        //获取用户id
        $uid = Auth::id();

        $articles = Article::find($id);
        $userid = $articles ->user ->id;
        $article_list = Article::where('user_id', $userid) ->limit(5) ->orderBy('created_at', 'desc') ->get();
        $category_id = $articles ->category ->id;
        $article_tj = Article::where('category_id', $category_id) ->limit(5) ->orderBy('created_at', 'desc') ->get();
        //获取作者信息
        $author = $articles -> user;
        // 推荐感兴趣的人
        $category = $articles -> category_id;
        // 获取这个分类对应作者的id
        $user_ids = $articles -> where('category_id',$category) -> select('user_id') -> get();
        // 转化为数组
        $users_id = [];
        foreach ($user_ids as $key => $value) {
            $users_id[] = $value['user_id'];
        }

        $users = $articles -> user -> whereIn('id',$users_id) -> get();

        // 获取传过来的name值
        if($res == 'close'){
            // 如果接收到name=close 则评论为空
            $comments = [];
            $name='';
        }elseif($res == 'self'){
            // 查询 user_id = 用户id,用户的所有评论
            $comments = Comment::where('user_id',$uid)->orderBy('created_at', 'desc')->paginate(5);
            $name='self';
        }else{
            // 查询所有评论
            $comments = Comment::where('article_id',$id)->orderBy('created_at', 'desc')->paginate(5);
            $name='';
        }
        // 分配变量
        return view('articles.show',[
            'articles'=>$articles,
            'users'=>$users,
            'author'=>$author,
            'comments'=>$comments,
            'name' => $name,
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
        
        return back() ->with('success', '修改成功');
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
