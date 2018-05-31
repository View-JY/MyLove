@extends('layouts.app')

@section('content')
<div class="row index" id="app">
	<div class="col-xs-8">
		<div class="main-top clearfix">
    		<a class="avatar-collection" href="/c/8c92f845cd4d">
          		<!-- <img src="//upload.jianshu.io/collections/images/283250/%E6%BC%AB%E7%94%BB%E4%B8%93%E9%A2%98.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/240/h/240" alt="240"> -->
			</a>
			@if(Auth::check())
                @if(!$category ->categoryFollow(Auth::id()) ->exists())
                <a href="{{ route('categories.follow', $category) }}" class="btn btn-success pull-right">关注</a>
                @else
                <a href="{{ route('categories.unfollow', $category) }}" class="btn btn-default pull-right">取消关注</a>
                @endif

                <div class="btn btn-info pull-right" style="margin: 0 10px;">写文章</div>
            @endif
        	<div class="title">
          		<a class="name" href="javascript:;">{{ $category ->name }}</a>
        	</div>
        	<div class="info">
         		收录了108435篇文章 · 1350243人关注
        	</div>
     	</div>

     	<div class="list-container">
     		<ul class="note-list">
                @foreach($articles as $article)
     			<li>
					<div class="content">

						<a href="{{ route('articles.show', $article ->id) }}" class="title" target="_blank">{{ $article ->name }}</a>
						<small>{{ $category ->name }}</small>
						<p class="abstract">{!! $article ->body !!}</p>
						<div class="meta">
							<a href="javascript:;">{{ $article ->user ->name }}</a>
							<a target="_blank" href="/p/fb06d3377281#comments">
					        	<i class="glyphicon glyphicon-comment"></i> 评论
							</a>
							<span><i class="glyphicon glyphicon-heart"></i> 点赞</span>
						</div>
					</div>
				</li>
                @endforeach
     		</ul>
     	</div>
	</div>

	<div class="col-xs-4">
        <div class="aside">
            <p class="title">专题公告</p>
            <div class="description js-description">
              <p>{{ $category ->description }}</p>
            </div>
        </div>
	</div>
</div>
@endsection

<style>
	.main-top {
        margin-bottom: 35px;
        padding-bottom: 15px;
        border-bottom: 1px solid #f0f0f0;
    }
    .main-top .avatar-collection {
        float: left;
        width: 80px;
        height: 80px;
    }
    .avatar-collection {
        width: 48px;
        height: 48px;
        display: block;
        cursor: pointer;
    }
    .avatar-collection img {
        width: 100%;
        height: 100%;
        border: 1px solid #ddd;
        border-radius: 10%;
    }
    .main-top .info {
        margin-top: 10px;
        padding-left: 100px;
        font-size: 14px;
        color: #969696;
    }
    .main-top .title {
        padding: 10px 0 0 100px;
    }
    .main-top .title .name {
        display: inline;
        font-size: 21px;
        font-weight: 700;
        vertical-align: middle;
        text-decoration: none;
        font-size: 18px;
    }
    .note-list {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .note-list {
        margin: 0;
        padding: 0;
        list-style: none;
    }
    .note-list .title:visited {
        color: #969696;
    }
    .note-list .title {
        margin: -7px 0 4px;
        display: inherit;
        font-size: 18px;
        font-weight: 700;
        line-height: 1.5;
        color: #333;
    }
    .note-list .title:visited {
        color: #969696;
    }
    .note-list .title {
        margin: -7px 0 4px;
        display: inherit;
        font-size: 18px;
        font-weight: 700;
        line-height: 1.5;
    }
    .note-list .abstract {
        margin: 0 0 8px;
        font-size: 13px;
        line-height: 24px;
        color: #999;
    }
    .note-list .abstract {
        margin: 0 0 8px;
        font-size: 13px;
        line-height: 24px;
        color: #999;
    }
    .note-list .meta {
        padding-right: 0!important;
        font-size: 12px;
        font-weight: 400;
        line-height: 20px;
    }
    .note-list .meta a, .note-list .meta a:hover {
        transition: .1s ease-in;
        -webkit-transition: .1s ease-in;
        -moz-transition: .1s ease-in;
        -o-transition: .1s ease-in;
        -ms-transition: .1s ease-in;
    }
    .note-list .meta a {
        margin-right: 10px;
        color: #b4b4b4;
    }
    .note-list .meta span {
        margin-right: 10px;
        color: #b4b4b4;
    }

    .aside .title {
        margin-bottom: 10px;
        font-size: 14px;
        color: #969696;
    }

    .aside .description {
        position: relative;
        margin-bottom: 20px;
        padding: 0 0 16px;
        text-align: left;
        font-size: 14px;
        border-bottom: 1px solid #f0f0f0;
        clear: both;
        word-break: break-word!important;
        word-break: break-all;
    }
</style>