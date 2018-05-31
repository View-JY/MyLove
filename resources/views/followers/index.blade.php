@extends('layouts.app')

@section('content')
<div class="row subscription" id="app">
	<div class="col-xs-3">
		<div class="aside">
			<ul class="js-subscription-list">
				<!-- 点击显示喜欢信息(唯一不变) -->
				<li class="router-link-exact-active active">
					<a href="#/timeline" class="wrap">
						<div class="avatar">
							<img src="//upload.jianshu.io/users/upload_avatars/5675788/3579d3a6-efd2-4c77-a4c1-5ba1c272cec7.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/120/h/120" style="border: none;">
						</div>
						<div class="name">简友圈</div>
					</a>
				</li>



				<!-- 你关注的人（循环这里） -->
				<li class="">
					<a href="#/subscriptions/5951133/user" class="wrap">
						<div class="avatar">
							<img src="//upload.jianshu.io/users/upload_avatars/5675788/3579d3a6-efd2-4c77-a4c1-5ba1c272cec7.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/120/h/120">
						</div>
						<div class="name">不言简书</div>
						<span class="count">35</span>
					</a>
				</li>
				<li class="">
					<a href="#/subscriptions/5951133/user" class="wrap">
						<div class="avatar">
							<img src="//upload.jianshu.io/users/upload_avatars/5675788/3579d3a6-efd2-4c77-a4c1-5ba1c272cec7.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/120/h/120">
						</div>
						<div class="name">不言简书</div>
						<span class="count">35</span>
					</a>
				</li>
				<li class="">
					<a href="#/subscriptions/5951133/user" class="wrap">
						<div class="avatar">
							<img src="//upload.jianshu.io/users/upload_avatars/5675788/3579d3a6-efd2-4c77-a4c1-5ba1c272cec7.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/120/h/120">
						</div>
						<div class="name">不言简书</div>
						<span class="count">35</span>
					</a>
				</li>
				<li class="">
					<a href="#/subscriptions/5951133/user" class="wrap">
						<div class="avatar">
							<img src="//upload.jianshu.io/users/upload_avatars/5675788/3579d3a6-efd2-4c77-a4c1-5ba1c272cec7.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/120/h/120">
						</div>
						<div class="name">不言简书</div>
						<span class="count">35</span>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="col-xs-7 main">
		<div class="main-top">
			<a href="/u/e4c422aa5418" target="_blank" class="avatar">
				<img src="//upload.jianshu.io/users/upload_avatars/5542274/d411c81a-fd3b-4d6f-b3be-559bba076426.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/160/h/160">
			</a>
      		<a href="/u/e4c422aa5418" target="_blank" class="btn btn-default pull-right" style="margin: 0 10px;">
      			取消关注<i class="iconfont ic-link"></i>
      		</a>
			<a href="/u/e4c422aa5418" target="_blank" class="btn btn-info pull-right" style="margin: 0 10px;">
      			个人主页<i class="iconfont ic-link"></i>
      		</a>
      		<div class="title"><a href="/u/e4c422aa5418" target="_blank" class="name">心若了无尘</a></div>
      		<div class="info">写了61398字，获得了2267个喜欢</div>
      	</div>

		<!-- 关注的人的列表 -->
      	<div class="note-list" style="display: block;">
      		<li class="">
      			<div class="content">
      				<a href="/p/c552699ee3fc" target="_blank" class="title">关于科学素养，我想说</a>
      				<p class="abstract">那天早晨在新华社微信公众号上看到这样一条消息： 欧洲科研人员制造出世界上加热最快的“热水器”，不到75飞秒就将水加热到10万摄氏度。一...</p>
      				<div class="meta">
      					<a href="/p/c552699ee3fc" target="_blank">
      						<i class="glyphicon glyphicon-eye-open"></i> 632
      					</a>
      					<a href="/p/c552699ee3fc#comments" target="_blank">
      						<i class="glyphicon glyphicon-eye-open"></i> 18
      					</a>
      					<span>
      						<i class="glyphicon glyphicon-heart"></i> 34
      					</span>
      					<span class="time">05.22 10:41</span>
      				</div>
      			</div>
      		</li>
      	</div>

      	<div class="note-list" style="display: none;">
      		<li class="">
      			<div class="content">
      				<div class="author">
      					<a href="/u/8a8db9af3250" target="_blank" class="avatar">
      						<img src="//upload.jianshu.io/users/upload_avatars/5574423/21f2a1cb-4188-41f6-ae19-7f93a2ee975b.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/96/h/96"></a>
      						<div class="info">
      							<a href="/u/8a8db9af3250" target="_blank" class="nickname">孔雀东南飞飞</a>
      							<span>喜欢了文章 · 昨天 22:20</span>
      						</div>
      					</div>
      					<a href="/p/e93ce2ea9814?utm_source=desktop&amp;utm_medium=timeline" target="_blank" class="title">伊棠小句 | 披荆斩棘</a>
      					<p class="abstract">总有一个理由让你继续坚持或重新开始，披荆斩棘，默默奋斗，愿在未来的路上，步伐坚定且内心温柔。</p>
      					<div class="meta">
      						<div class="origin-author">
      							<a href="/u/1ab27648f788" target="_blank">伊棠Galina</a>
      						</div>
      						<a href="/p/e93ce2ea9814#comments" target="_blank">
      							<i class="glyphicon glyphicon-comment"></i> 1
      						</a>
      						<span>
      							<i class="glyphicon glyphicon-heart"></i> 4
      						</span>
      					</div>
      				</div>
      			</div>
  			</li>
      	</div>

	</div>
</div>
@endsection

<style>
	.subscription .aside ul {
	    margin-top: 7px;
	    list-style: none;
	    border-top: 1px solid #f0f0f0;
	    padding-left: 0;
	}
	.subscription .aside li.active .wrap {
	    background-color: #f0f0f0;
	    border-radius: 4px 0 0 4px;
	    text-decoration: none;
	    color: #333;
	}
	.subscription .aside li:first-child .wrap {
	    border-radius: 0 0 0 4px!important;
	}
	.subscription .aside .wrap {
	    padding: 10px 13px;
	    display: block;
	    text-decoration: none;
	    color: #333;
	}
	.subscription .aside .avatar, .subscription .aside .avatar-collection {
	    width: 40px;
	    height: 40px;
	    margin-right: 4px;
	    display: inline-block;
	}
	.avatar img {
	    width: 100%;
	    height: 100%;
	    border: 1px solid #ddd;
	    border-radius: 50%;
	}
	.subscription .aside .name {
	    font-size: 14px;
	    vertical-align: middle;
	    display: inline-block;
	    max-width: 160px;
	    overflow: hidden;
	    text-overflow: ellipsis;
	    white-space: nowrap;
	}
	.subscription .aside .count {
	    float: right;
	    margin-top: 10px;
	    font-size: 14px;
	    color: #969696;
	}
	.subscription .main .main-top {
	    margin-bottom: 30px;
	    border-bottom: 1px solid #f0f0f0;
	    padding-bottom: 15px;
	}
	.subscription .main .main-top .avatar {
	    margin-left: -2px;
	}
	.subscription .main .main-top .avatar, .subscription .main .main-top .avatar-collection {
	    float: left;
	    width: 80px;
	    height: 80px;
	}
	.subscription .main .main-top .title {
	    padding: 10px 0 0 100px;
	}
	.subscription .main .main-top .title .name {
	    font-size: 21px;
	    font-weight: 700;
	    vertical-align: middle;
	    display: inline;
	    text-decoration: none;
	    color: #333;
	}
	.subscription .main .main-top .info {
	    margin-top: 10px;
	    padding-left: 100px;
	    font-size: 14px;
	    color: #969696;
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
	.note-list .meta a {
	    margin-right: 10px;
	    color: #b4b4b4;
	}
	.note-list .meta a, .note-list .meta a:hover {
	    transition: .1s ease-in;
	    -webkit-transition: .1s ease-in;
	    -moz-transition: .1s ease-in;
	    -o-transition: .1s ease-in;
	    -ms-transition: .1s ease-in;
	}
	.note-list .author .avatar, .note-list .author .info {
	    display: inline-block;
	    vertical-align: middle;
	}
</style>