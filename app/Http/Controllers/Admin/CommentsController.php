<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;
use App\CommentZan;
use App\CommentReport;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 把数据库中举报信息获取,分页
        $comments_reports = CommentReport::paginate(5);
        // 渲染到页面
        return view('admin.comments.index',['comments_reports'=>$comments_reports]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        // 根据传过来举报id 获取举报的数据
        $commentReport = CommentReport::find($id);
        // 根据关联评论模型 获取评论id
        $comment_id = $commentReport -> comment -> id;
        // 根据评论id 获取当条评论信息
        $comments = Comment::find($comment_id);
        // 渲染到添加页面
        return view('admin.comments.create',['comments'=>$comments]);
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
    

    // 当前模型 -> 关联模型 ->delete()


    public function destroy(Request $request, $id)
    {
        
        // 根据name值做判断,走无效删除举报
        if($request -> input('name') == 'wx'){
            // 获取举报那条id的数据
            $commentRep = CommentReport::find($id);
            // 执行删除
            $res = $commentRep -> delete();

            if($res){
                return redirect('/admin/comments') -> with('success','删除成功');
            }else{
                return redirect('/admin/comments') -> with('error','删除失败');
            }
        }

        if($request -> input('name') == 'tg'){
            // 获取举报那条id的数据
            $commentRep = CommentReport::find($id);
            // 根据关联评论 获取评论id
            $comment_id = $commentRep -> comment -> id;
            // 根据评论id 获取整条评论信息
            $comments = Comment::find($comment_id);
            // 根据评论关联点赞模型,判断点赞模型是否为空
            if($comments -> commentZans ->isEmpty()){
                // 如果为空,则删除评论和举报的信息
                $commentRep = CommentReport::find($id);
                // 删除举报的信息
                $res1 = $commentRep -> delete();
                // 获取评论的id
                $comment_id = $commentRep -> comment -> id;
                // 获取整条评论信息
                $comments = Comment::find($comment_id);
                // 删除评论
                $res2 = $comments -> delete();
                if($res1 && $res2){
                     return redirect('/admin/comments') -> with('success','删除成功');
                }else{
                    return redirect('/admin/comments') -> with('error','删除失败');
                }
            }else{
                // 获取举报那条id数据
                $commentRep = CommentReport::find($id);
                // 删除举报数据
                $res1 = $commentRep -> delete();
                // 根据关联评论 获取评论id
                $comment_id = $commentRep -> comment -> id;
                // 根据评论id 获取整条评论信息
                $comments = Comment::find($comment_id);
                // 删除评论数据
                $res2 = $comments -> delete();
                // 根据关联评论 获取点赞id
                $commentZan_id = $comments -> commentZans[0] -> id ;
                // 根据点赞id 获取当条的点赞
                $commentZan = CommentZan::find($commentZan_id);
                // 删除点赞数据
                $res3 = $commentZan -> delete();
                if($res1 && $res2 && $res3){
                     return redirect('/admin/comments') -> with('success','删除成功');
                }else{
                    return redirect('/admin/comments') -> with('error','删除失败');
                }

            }
                           
        }
        
    }

}