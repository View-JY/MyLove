{{-- 个人中心 --}}
@extends('layouts.app')

@section('content')
<div class="row person" id="app">
	<div class="col-xs-9 main">
		<div class="main-top ">
			<a class="avatar" href="/u/606f73047662">
				<img src="//upload.jianshu.io/users/upload_avatars/4743930/0579ea6b-8c13-4178-b122-314178aad51d?imageMogr2/auto-orient/strip|imageView2/1/w/240/h/240" alt="240">
			</a>
			<div class="title">
				<a class="name" href="/u/606f73047662">驹强贯世文武英杰</a>
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
				<a href="/u/606f73047662?order_by=shared_at"><i class="glyphicon glyphicon-tasks" style="top: 3px;"></i> 最新文章</a>
			</li>
			<li class="">
				<a href="/users/606f73047662/timeline"><i class="glyphicon glyphicon-bell" style="top: 3px;"></i> 最新评论</a>
			</li>
			<li class="">
				<a href="/u/606f73047662?order_by=commented_at"><i class="glyphicon glyphicon-comment" style="top: 3px;"></i> 最新吐槽</a>
			</li>
			<li class="">
				<a href="/u/606f73047662?order_by=commented_at"><i class="glyphicon glyphicon-bookmark" style="top: 3px;"></i> 我的喜欢</a>
			</li>
		</ul>
	</div>
	<div class="col-xs-3">

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

</style>