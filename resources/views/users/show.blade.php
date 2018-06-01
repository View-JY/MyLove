{{-- 个人中心 --}}
@extends('layouts.app')

@section('content')
<div class="row person" id="app">
	<div class="col-xs-8 main">
		<div class="main-top ">
			<a class="avatar" href="/u/606f73047662">
				<img src="//upload.jianshu.io/users/upload_avatars/4743930/0579ea6b-8c13-4178-b122-314178aad51d?imageMogr2/auto-orient/strip|imageView2/1/w/240/h/240" alt="240">
			</a>
			<div class="title">
				<a class="name" href="/u/606f73047662">{{ $users ->name }}</a>
			</div>
			<div class="info">
				<ul style="padding-left: 0;">
					<li>
						<div class="meta-block">
							<a href="/users/606f73047662/following">
								<p>8</p> 关注 >
							</a>
						</div>
					</li>
					<li>
						<div class="meta-block">
							<a href="/users/606f73047662/following">
								<p>8</p> 粉丝 >
							</a>
						</div>
					</li>
					<li>
						<div class="meta-block">
							<a href="/users/606f73047662/following">
								<p>8</p> 文章 >
							</a>
						</div>
					</li>
					<li>
						<div class="meta-block">
							<a href="/users/606f73047662/following">
								<p>8</p> 收获喜欢 >
							</a>
						</div>
					</li>
					<li class="pull-right">
						<a href="{{ route('users.create') }}" class="btn btn-success" style="color: #FFF;">点击编辑个人资料</a>
					</li>
				</ul>
			</div>

		</div>
		<ul class="trigger-menu">
			<li class="active">
				<a href="{{ route('users.show', ['id' => Auth::id(), 'tab' => 'article']) }}"><i class="glyphicon glyphicon-tasks" style="top: 3px;"></i> 最新文章</a>
			</li>
			<li class="">
				<a href="{{ route('users.show', ['id' => Auth::id(), 'tab' => 'comment']) }}"><i class="glyphicon glyphicon-bell" style="top: 3px;"></i> 最新评论</a>
			</li>
			<li class="">
				<a href="{{ route('users.show', ['id' => Auth::id(), 'tab' => 'dynamic']) }}"><i class="glyphicon glyphicon-comment" style="top: 3px;"></i> 最新吐槽</a>
			</li>
			<li class="">
				<a href="{{ route('users.show', ['id' => Auth::id(), 'tab' => 'like']) }}"><i class="glyphicon glyphicon-bookmark" style="top: 3px;"></i> 我的喜欢</a>
			</li>
		</ul>
	
		<!-- 我的文章 -->
		@if($table == 'article')
		<div class="note-list">
			<ul>
				@foreach($articles as $article)
				<li class="">
					<div class="content">
						<a class="title" target="_blank" href="/articles/{{ $article ->id }}">{{ $article ->name }}<a>
						<p class="abstract">{!! $article ->body !!}</p>
						<div class="meta">
							<a target="_blank" href="/p/74d965068ca2">
								<i class="glyphicon glyphicon-eye-open"></i> 0
							</a>        
							<a target="_blank" href="/p/74d965068ca2#comments">
								<i class="glyphicon glyphicon-comment"></i> 0
							</a>     
							 <span><i class="glyphicon glyphicon-heart"></i> 0</span>
							<span class="time" data-shared-at="2018-05-31T16:18:38+08:00">{{ $article ->created_at }}</span>
						</div>
					</div>
				</li>
				@endforeach
			</ul>
		</div>	
		{!! $articles ->appends($params) ->render() !!}
		@elseif($table == 'comment')
		<!-- 我的动态 -->
		<div class="note-list">
			<ul>
				@foreach($comments as $comment)
				<li>
					<div class="content">
						<div class="author">
							<a class="avatar" href="/u/606f73047662">
								<img src="//upload.jianshu.io/users/upload_avatars/4743930/0579ea6b-8c13-4178-b122-314178aad51d?imageMogr2/auto-orient/strip|imageView2/1/w/180/h/180" alt="180">
							</a>      
							<div class="info">
								<a class="nickname" href="/u/606f73047662">{{ $comment ->user ->name }}</a>
									<span data-type="comment_note" data-datetime="2018-05-31T16:27:56+08:00">{{ $comment ->created_at }}</span>
							</div>
						</div>
						<p class="comment">{!! $comment ->content !!}</p>
						<blockquote>
							<a class="title" href="/articles/{{ $comment ->article ->id }}">{{ $comment ->article ->name }}</a>
							<p class="abstract">{!! $comment ->article ->body !!}</p>
							<div class="meta">
								<div class="origin-author">
									<a href="/users/606f73047662">{{ $comment ->user ->name }}</a>
								</div>
							<div class="meta">
								<a href="/p/74d965068ca2">
									<i class="glyphicon glyphicon-eye-open"></i> 0
								</a>        
								<a href="/p/74d965068ca2">
									<i class="glyphicon glyphicon-comment"></i> 2
								</a>        
								<span><i class="glyphicon glyphicon-heart"></i> 0</span>
							</div>
						</blockquote>
					</div>
				</li>
				@endforeach
			</ul>
		</div>
		{!! $comments ->appends($params) ->render() !!}
		@elseif($table == 'dynamic')
		<!-- 我的评论 -->
		<div class="note-list">
			<ul>
				@foreach($dynamics as $dynamic)
				<li>
					<div class="content">
						<div class="author">
							<a class="avatar" href="/u/606f73047662">
								<img src="//upload.jianshu.io/users/upload_avatars/4743930/0579ea6b-8c13-4178-b122-314178aad51d?imageMogr2/auto-orient/strip|imageView2/1/w/180/h/180" alt="180">
							</a>      
							<div class="info">
								<a class="nickname" href="/u/606f73047662">{{ $dynamic ->user ->name }}</a>
									<span data-type="comment_note" data-datetime="2018-05-31T16:27:56+08:00"> 发表了评论 · {{ $dynamic ->created_at }}</span>
							</div>
						</div>
						<p class="comment">{!! $dynamic ->dynamic !!}</p>
						<blockquote>
							<div class="meta">
								<a href="/p/74d965068ca2">
									<i class="glyphicon glyphicon-eye-open"></i> 0
								</a>        
								<a href="/p/74d965068ca2">
									<i class="glyphicon glyphicon-comment"></i> 2
								</a>        
								<span><i class="glyphicon glyphicon-heart"></i> 0</span>
							</div>
						</blockquote>
					</div>
				</li>
				@endforeach
			</ul>
		</div>
		{!! $dynamics ->appends($params) ->render() !!}
		@else
		<!-- 我的喜欢 -->
		<div class="note-list">
			<ul>
				@foreach($likes as $like)
				<li>
					<div class="content">
						<div class="author">
							<a class="avatar" href="/u/606f73047662">
								<img src="//upload.jianshu.io/users/upload_avatars/4743930/0579ea6b-8c13-4178-b122-314178aad51d?imageMogr2/auto-orient/strip|imageView2/1/w/180/h/180" alt="180">
							</a>      
							<div class="info">
								<a class="nickname" href="/u/606f73047662">{{ $like ->user ->name }}</a>
									<span data-type="comment_note" data-datetime="2018-05-31T16:27:56+08:00"> 我喜欢了 · {{ $like ->user ->created_at }}</span>
							</div>
						</div>
						<blockquote>
							<a class="title" href="/articles/{{ $like ->article ->id}}">{{ $like ->article ->name }}</a>
							<p class="abstract">{!! $like ->article ->body !!}</p>
							<div class="meta">
								<a href="/p/74d965068ca2">
									<i class="glyphicon glyphicon-eye-open"></i> 0
								</a>        
								<a href="/p/74d965068ca2">
									<i class="glyphicon glyphicon-comment"></i> 2
								</a>        
								<span><i class="glyphicon glyphicon-heart"></i> 0</span>
							</div>
						</blockquote>
					</div>
				</li>
				@endforeach($likes as $like)
			</ul>
		</div>
		@endif
	</div>
	<div class="col-xs-4">
		<div class="aside">
			<div>
				<div class="ant" style="position: relative; display: block; width: 100%; height: 100%; overflow-y: auto; background-color: #FFF; color: #f2f2f2; z-index: 100;"	>
					<div class="ant-title" style="padding: 30px 18px 5px; text-align: center;"	>
						<a href="" style="display: block; font-size: 15px; padding: 9px 0; color: #0084ff; border: 1px solid #0084ff; border-radius: 20px; -webkit-transition: border-color .2s ease-in; -o-transition: border-color .2s ease-in; transition: border-color .2s ease-in; text-decoration: none;">回首页</a>
					</div>
					<div style="padding: 0 15px; margin-top: 20px; margin-bottom: 10px;">
						<div class="" style="cursor: pointer; color: #f2f2f2;  -webkit-transition: color .2s cubic-bezier(.645,.045,.355,1);  -o-transition: color .2s cubic-bezier(.645,.045,.355,1); transition: color .2s cubic-bezier(.645,.045,.355,1); margin-bottom: 15px; color: #0084ff;">
							<i class="fa fa-plus"></i>
							<span style="margin-left: 4px; font-size: 16px;"><i class="glyphicon glyphicon-plus"></i> 新建文集</span>
							<small>该文件对外部不公开</small>
						</div>
						<form action="{{ route('collectes.store') }}" method="post" accept-charset="utf-8">
							{{ csrf_field() }}
							<div class="form-group">
								<input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="请输入文集名称" required />
							</div>
							<button type="submit" class="btn btn-success">点击创建文集</button>
							<button type="reset" class="btn btn-default">取消</button>
						</form>
						<ul	style="padding-left: 0; position: relative; margin-bottom: 50px; z-index: 0;">
							
							<li style="background-color: #666; border-left: 3px solid #0084ff; padding-left: 12px;position: relative; line-height: 40px; list-style: none; font-size: 15px; color: #0084ff; background-color: #fff; padding: 0 15px; cursor: pointer; -webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none; -webkit-transition: padding .2s; -o-transition: padding .2s; transition: padding .2s;margin-bottom: 10px;">
								<a href="" style="text-decoration: none; color: #0084ff;"><i class="glyphicon glyphicon-book"></i> </a>
								<a href="" style="color: #999; text-decoration: none; margin-left: 10px;">
								<i class="glyphicon glyphicon-plus"></i> 在该文集内创建文章</a>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
  		</div>
	</div>
</div>
@endsection
<style>
	.person .main .main-top {
	    margin-bottom: 20px;
	}
	.person .main .main-top .avatar {
	    float: left;
	    width: 80px;
	    height: 80px;
	    margin-left: -2px;
	}
	.person .main .main-top .title {
	    padding: 0 0 0 100px;
	}
	.person .main .main-top .title .name {
	    display: inline;
	    font-size: 21px;
	    font-weight: 700;
	    vertical-align: middle;
	    color: #333;
	    text-decoration: none;	
	}
	.person .main .main-top .info {
	    margin-top: 5px;
	    padding-left: 100px;
	    font-size: 14px;
	}
	.person .main .main-top .info ul {
	    font-size: 0;
	}
	.person .main .main-top .info ul li {
	    display: inline-block;
	}
	.person .main .main-top .info ul .meta-block {
	    font-size: 12px;
	    margin: 0 7px 6px 0;
	    padding: 0 7px 0 0;
	    border-right: 1px solid #f0f0f0;
	}
	.person .main .main-top .info ul a, .person .main .main-top .info ul div {
	    color: #969696;
	    text-decoration: none;
	}
	.person .main .main-top .info ul p {
	    margin-bottom: -3px;
	    font-size: 15px;
	    color: #333;
	}
	.trigger-menu {
	    margin-bottom: 20px;
	    border-bottom: 1px solid #f0f0f0;
	    font-size: 0;
	    list-style: none;
	}
	.trigger-menu li.active {
	    border-bottom: 2px solid #646464;
	}
	.trigger-menu li {
	    position: relative;
	    display: inline-block;
	    padding: 8px 0;
	    margin-bottom: -1px;
	}
	.trigger-menu .active a, .trigger-menu a:hover {
	    color: #646464;
	    text-decoration: none;
	}
	.trigger-menu a {
	    padding: 13px 20px;
	    font-size: 15px;
	    font-weight: 700;
	    color: #969696;
	    line-height: 25px;
	    text-decoration: none;
	}
	
	.note-list .author {
    margin-bottom: 14px;
    font-size: 13px;
}
.note-list ul {
	list-style: none;
}
.note-list .author .avatar, .note-list .author .info {
    display: inline-block;
    vertical-align: middle;
}
.note-list .author .avatar {
    margin: 0 5px 0 0;
}
.note-list .author a {
    color: #333;
}
.note-list .author .info .nickname {
    vertical-align: middle;
}
.note-list .author a {
    color: #333;
}
.note-list .author .info span {
    display: inline-block;
    padding-left: 3px;
    color: #969696;
    vertical-align: middle;
}
.note-list .comment {
    font-size: 15px;
    line-height: 1.7;
}
.note-list blockquote {
    margin-bottom: 0;
    color: #969696;
    border-left: 3px solid #d9d9d9;
}

blockquote {
    padding: 10px 20px;
    margin: 0 0 20px;
    font-size: 17.5px;
    border-left: 5px solid #eee;
}
.note-list blockquote .title {
    margin: 0 0 4px;
    font-size: 15px;
}
.note-list .title {
    margin: -7px 0 4px;
    display: inherit;
    font-size: 18px;
    font-weight: 700;
    line-height: 1.5;
}
.note-list blockquote .abstract {
    margin: 0 0 4px;
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
.note-list .origin-author {
    display: inline;
    margin-bottom: 5px;
    font-size: 12px;
    color: #969696;
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
.note-list .origin-author a {
    margin-right: 5px;
}
.person .aside .title {
    float: left;
    margin-bottom: 10px;
    font-size: 14px;
    color: #969696;
}
.person .aside .list {
    margin-bottom: 16px;
    padding-bottom: 16px;
    list-style: none;
    border-bottom: 1px solid #f0f0f0;
    clear: both;
}
.person .aside .list li {
    margin-bottom: 10px;
}
.person .aside .list li a {
    display: inline-block;
}
.person .aside .name {
    position: relative;
    max-width: 236px;
    vertical-align: middle;
    top: 1px;
    font-size: 14px;
    color: #333;
}

</style>