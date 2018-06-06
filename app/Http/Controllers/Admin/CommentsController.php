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
        //echo '111';
        $comments_reports = CommentReport::paginate(5);
        //dd($comments);
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
        $commentReport = CommentReport::find($id);
        $comment_id = $commentReport -> comment -> id;
        $comments = Comment::find($comment_id);
        //$comments = $commentReport -> comment ->get() ;
        //dd($comments);
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
        

        if($request -> input('name') == 'wx'){

            $commentRep = CommentReport::find($id);
            $res = $commentRep -> delete();

            if($res){
                return redirect('/admin/comments') -> with('success','删除成功');
            }else{
                return redirect('/admin/comments') -> with('error','删除失败');
            }
        }

        if($request -> input('name') == 'tg'){
            $commentRep = CommentReport::find($id);
            $comment_id = $commentRep -> comment -> id;
            $comments = Comment::find($comment_id);
            if($comments -> commentZans ->isEmpty()){
                $commentRep = CommentReport::find($id);
                $res1 = $commentRep -> delete();
                //dd($commentRep);
                $comment_id = $commentRep -> comment -> id;
                $comments = Comment::find($comment_id);
                //dd($comments);
                $res2 = $comments -> delete();
            }else{
                 $commentZan_id = $comments -> commentZans[0] -> id;
                if(null !== $commentZan_id  && $commentZan_id > 0){
                    $commentRep = CommentReport::find($id);
                    $res1 = $commentRep -> delete();
                    //dd($commentRep);
                    $comment_id = $commentRep -> comment -> id;
                    $comments = Comment::find($comment_id);
                    //dd($comments);
                    $res2 = $comments -> delete();
                    $commentZan_id = $comments -> commentZans[0] -> id ;

                    $commentZan = CommentZan::find($commentZan_id);
                
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

}