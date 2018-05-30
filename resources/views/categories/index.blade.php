@extends('layouts.app')

@section('content')
<div class="row index" id="app">
	<div class="recommend clearfix" style="padding-top:0;">
		@foreach($categories as $category)
		<div class="col-xs-3">
			<div class="collection-wrap">
				<a target="_blank" href="{{ url('/') }}">
	      			<img class="avatar-collection img-thumbnail" src="//upload.jianshu.io/collections/images/4/sy_20091020135145113016.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/180/h/180" alt="180">
	      			<h4 class="name">{{ $category ->name }}</h4>
	      			<p class="collection-description">{{ $category ->description }}</p>
				</a>
				<a class="btn btn-success follow"><i class="iconfont ic-follow"></i><span>关注</span></a>
				<hr>
				<div class="count"><a target="_blank" href="/c/yD9GAd">171541篇文章</a> · 2882.6K人关注</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection