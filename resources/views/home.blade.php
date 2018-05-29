@extends('layouts.app')

@section('content')
<div class="row index" id="app">
	<!-- Left -->
	<div class="col-xs-8 main">
		<!-- 文章分类 -->
		<div class="recommend-collection">
			@foreach($categories as $category)
			<a class="collection" target="_blank" href="/c/8c92f845cd4d?utm_medium=index-collections&amp;utm_source=desktop">
              <img src="http://upload.jianshu.io/collections/images/283250/%E6%BC%AB%E7%94%BB%E4%B8%93%E9%A2%98.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/64/h/64" alt="64">
              <div class="name">
              	<h4 data-description="{{ $category ->description }}">{{ $category ->name }}</h4>
              </div>
			</a>
			@endforeach
			<a class="more-hot-collection" target="_blank" href="{{ route('categories.index') }}">
            	点击查看更多热门专题 <i class="glyphicon glyphicon-chevron-righ"></i>
			</a>
		</div>
		<div class="split-line"></div>
		<div id="list-container">
			<ul class="note-list">
				<!-- 没有图片结构 -->
				@foreach($articles as $article)

				<li>
					<div class="content">

						<a href="javascript:;" class="title" target="_blank">{{ $article -> name }}</a>
						<p class="abstract">{!! $article -> body !!}</p>
						<div class="meta">

							<a target="_blank" href="/p/fb06d3377281#comments">
					        	<i class="glyphicon glyphicon-comment">评论</i>
							</a>
							<span><i class="glyphicon glyphicon-heart"></i>点赞</span>
						</div>
					</div>
				</li>
				@endforeach
			</ul>
		</div>
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
