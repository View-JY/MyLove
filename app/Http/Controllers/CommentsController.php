<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Article;
use App\Category;
use App\ArticleReport;
use App\Like;
use App\Comment;
use App\User;
use App\CommentReport;
use App\CommentZan;

class CommentsController extends Controller
{
     //评论举报
    public function report(Request $request,$id)
    {   
        // $id为文章id
        // 获取传过来的name值,为传过来的文章id
        $data['comment_id'] = $request -> input('name');
        //获取用户id
        $data['user_id'] = Auth::id();
        //添加到数据库
        $comment_reports = new CommentReport;
        $comment_reports -> comment_id = $request -> input('name');
        $comment_reports -> user_id = Auth::id();
        $res = $comment_reports -> save();
        //做判断
        if($res){
            return back() -> with('success','举报成功,系统审核中');
        }else{
            return back() -> with('error','举报失败');
        }
    }


     //评论区点赞
    public function zan(Request $request,$id)
    {   
        // 把字段添加到数据库
        $comment_zans = new CommentZan;
        $comment_zans -> comment_id = $request -> input('name');
        $comment_zans -> user_id = Auth::id();
        $res = $comment_zans -> save();
        // 做判断 
        if($res){
            return back() -> with('success','点赞成功');
        }else{
            return back() -> with('error','点赞失败');
        }   
    }


    //评论取消点赞
    public function unzan(Request $request, $id)
    {
        // 取消点赞,从数据库中删除数据
        $Comment = Comment::find($id);
        //评论模型和评论赞模型关联,调取方法,获取指定字段进行删除
        $res = $Comment ->commentZan(Auth::id()) -> delete();
        //做判断
        if($res){
            return back() -> with('success','取消点赞成功');
        }else{
            return back() -> with('error','取消点赞失败');
        }
    }

    //评论删除
    public function delete(Request $request, $id)
    {
        //echo '1111';
        $Comment = Comment::find($id);

        $res = $Comment -> delete();
        //dd($res);
        if($res){
            return back() -> with('success','点赞成功');
        }else{
            return back() -> with('error','点赞失败');
        } 
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo '1111';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comments = Comments::all();
        //dd($comments);
        return view('articles.show',[
            'comments' => $comments
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = $request -> only('content','article_id');
        $comment['user_id'] = Auth::id();
        //dump( $comment );
        $comments = new Comment();
        $comments -> user_id = $comment['user_id'];
        $comments -> content = $comment['content'];
        $comments -> article_id = $comment['article_id'];
        $comments -> save();

        return back()->with('success', '评论成功，等待回复中!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comments = Comments::all();
        return view('articles.show',[
            'comments' => $comments
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
