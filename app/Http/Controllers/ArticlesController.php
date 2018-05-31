<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Article;
use Auth;
use App\Comment;
use App\User;
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
          $articles = Categories::all();

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
            'name' => 'required|min:4|max:16',
            'body' => 'required|min:20|max:255'
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
    public function show(Request $request,$id)
    {   
        
        $res = $request -> input('name');

        //dump($res);
        
        $uid = Auth::id();

        // dd($uid);

        $articles = Article::find($id);

        
        if($res == 'close'){
            $comments = [];
        }elseif($res == 'self'){
            $comments = Comment::where('user_id',$uid)->orderBy('created_at', 'desc')->paginate(5);
            $name='self';
        }else{
            $comments = Comment::where('article_id',$id)->orderBy('created_at', 'desc')->paginate(5);
             $name='';
        }

        return view('articles.show',[
                'articles'=>$articles,
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
