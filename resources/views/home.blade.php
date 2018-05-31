@extends('layouts.app')

@section('content')
<div class="row index" id="app">
	@if(!Auth::check())
	<div class="alert alert-info alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		亲，登陆才能享受更多功能偶~~
	</div>
	@endif
	<!-- Left -->
	<div class="col-xs-8 main">
		<!-- 文章分类 -->
		<div class="recommend-collection">
			@foreach($categories as $category)
			<a class="collection" target="_blank" href="{{ route('categories.show', $category ->id) }}">
              <img src="http://upload.jianshu.io/collections/images/283250/%E6%BC%AB%E7%94%BB%E4%B8%93%E9%A2%98.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/64/h/64" alt="64">
              <div class="name">{{ $category ->name }}</div>
			</a>
			@endforeach
			<a class="more-hot-collection" target="_blank" href="{{ route('categories.index') }}">
            	点击查看更多热门专题 >> <i class="glyphicon glyphicon-chevron-righ"></i>
			</a>
		</div>
		<div class="split-line"></div>
		<div id="list-container">
			<ul class="note-list">
				<!-- 没有图片结构 -->
				@foreach($articles as $article)
				<li>
					<div class="content">

						<a href="/articles/{{ $article -> id }}" class="title" target="_blank">{{ $article -> name }}</a>
						<small style="color: #0084ff; border: 1px solid #0084ff; padding: 2px 4px;">{{ $article ->category ->name }}</small>
						<p class="abstract">{!! $article -> body !!}</p>
						<div class="meta">
							<a href="{{ route('users.show', $article ->user ->id) }}">{{ $article ->user ->name }}</a>
							<a target="_blank" href="{{ route('articles.show', ['id' => $article ->id, '#' => 'comment']) }}">
					        	<i class="glyphicon glyphicon-comment"></i> 评论
							</a>
							<span><i class="glyphicon glyphicon-heart"></i> 点赞</span>
						</div>
					</div>
				</li>
				@endforeach

				<!-- 你不感兴趣的 -->
				@foreach($otherArticles as $article)
				<li>
					<div class="content">

						<a href="/articles/{{ $article -> id }}" class="title" target="_blank">{{ $article -> name }}</a>
						<small style="color: #0084ff; border: 1px solid #0084ff; padding: 2px 4px;">{{ $article ->category ->name }}</small>
						<p class="abstract">{!! $article -> body !!}</p>
						<div class="meta">
							<a href="{{ route('users.show', $article ->user ->id) }}">{{ $article ->user ->name }}</a>
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
		{{ $articles -> appends( $params ) -> links() }}
	</div>
	<!-- Right -->
	<div class="col-xs-3 aside">
		<!-- 注册登录 -->
		@include('common._login')
		<!-- 推荐作者 -->
		@include('common._auth')
		<!-- 实时动态 -->
		@include('common._dynamic')
		<!-- 友情链接 -->
		@include('common._advertising')
		<!-- 说明 -->
		@include('common._footer')
	</div>
</div>
@endsection
