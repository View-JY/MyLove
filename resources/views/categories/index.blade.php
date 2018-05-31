@extends('layouts.app')

@section('content')
<div class="row index" id="app">

	@include('common._message')

	<div class="recommend clearfix" style="padding-top:0;">
		@foreach($categories as $category)
		<div class="col-xs-3">
			<div class="collection-wrap">
				<a target="_blank" href="{{ url('/') }}">
	      			<img class="avatar-collection img-thumbnail" src="//upload.jianshu.io/collections/images/4/sy_20091020135145113016.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/180/h/180" alt="180">
	      			<h4 class="name">{{ $category ->name }}</h4>
	      			<p class="collection-description">{{ $category ->description }}</p>
				</a>

				@if(Auth::check())
					@if(!$category ->categoryFollow(Auth::id()) ->exists())
					<a href="{{ route('categories.follow', $category) }}" class="btn btn-success"><i class="iconfont ic-follow"></i> 关注</a>
					@else
					<a href="{{ route('categories.unfollow', $category) }}" class="btn btn-default"><i class="iconfont ic-follow"></i> 取消关注</a>
					@endif
				@endif
				<hr>
				<div class="count"><a target="_blank" href="/c/yD9GAd">171541篇文章</a> · 2882.6K人关注</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection