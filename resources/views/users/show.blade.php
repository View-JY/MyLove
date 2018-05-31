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
				<a href="/users/606f73047662/timeline"><i class="glyphicon glyphicon-bell" style="top: 3px;"></i> 最新动弹</a>
			</li>
			<li class="">
				<a href="/u/606f73047662?order_by=commented_at"><i class="glyphicon glyphicon-comment" style="top: 3px;"></i> 最新评论</a>
			</li>
			<li class="">
				<a href="/u/606f73047662?order_by=commented_at"><i class="glyphicon glyphicon-bookmark" style="top: 3px;"></i> 我的收藏</a>
			</li>
		</ul>
	
		<!-- 我的文章 -->
		<div class="note-list">
			<ul>
				<li class="">
					<div class="content">
						<a class="title" target="_blank" href="/p/74d965068ca2">这里是测试标题</a>
						<p class="abstract">这里是测试内容</p>
						<div class="meta">
							<a target="_blank" href="/p/74d965068ca2">
								<i class="glyphicon glyphicon-eye-open"></i> 0
							</a>        
							<a target="_blank" href="/p/74d965068ca2#comments">
								<i class="glyphicon glyphicon-comment"></i> 0
							</a>     
							 <span><i class="glyphicon glyphicon-heart"></i> 0</span>
							<span class="time" data-shared-at="2018-05-31T16:18:38+08:00">几秒前</span>
						</div>
					</div>
				</li>
			</ul>
		</div>	

		<!-- 我的动弹 -->
		<div class="note-list">
			<ul>
				<li>
					<div class="content">
						<div class="author">
							<a class="avatar" href="/u/606f73047662">
								<img src="//upload.jianshu.io/users/upload_avatars/4743930/0579ea6b-8c13-4178-b122-314178aad51d?imageMogr2/auto-orient/strip|imageView2/1/w/180/h/180" alt="180">
							</a>      
							<div class="info">
								<a class="nickname" href="/u/606f73047662">驹强贯世文武英杰</a>
									<span data-type="comment_note" data-datetime="2018-05-31T16:27:56+08:00"> 发表了动态 · 05.31 16:27</span>
							</div>
						</div>
						<p class="comment">测试评论</p>
					</div>
				</li>
			</ul>
		</div>

		<!-- 我的评论 -->
		<div class="note-list">
			<ul>
				<li>
					<div class="content">
						<div class="author">
							<a class="avatar" href="/u/606f73047662">
								<img src="//upload.jianshu.io/users/upload_avatars/4743930/0579ea6b-8c13-4178-b122-314178aad51d?imageMogr2/auto-orient/strip|imageView2/1/w/180/h/180" alt="180">
							</a>      
							<div class="info">
								<a class="nickname" href="/u/606f73047662">驹强贯世文武英杰</a>
									<span data-type="comment_note" data-datetime="2018-05-31T16:27:56+08:00"> 发表了评论 · 05.31 16:27</span>
							</div>
						</div>
						<p class="comment">测试评论</p>
						<blockquote>
							<a class="title" href="/p/74d965068ca2">这里是测试标题</a>
							<p class="abstract">这里是测试内容</p>
							<div class="meta">
								<div class="origin-author">
									<a href="/users/606f73047662">驹强贯世文武英杰</a>
								</div>
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
			</ul>
		</div>

		<!-- 我的喜欢 -->
		<div class="note-list">
			<ul>
				<li>
					<div class="content">
						<div class="author">
							<a class="avatar" href="/u/606f73047662">
								<img src="//upload.jianshu.io/users/upload_avatars/4743930/0579ea6b-8c13-4178-b122-314178aad51d?imageMogr2/auto-orient/strip|imageView2/1/w/180/h/180" alt="180">
							</a>      
							<div class="info">
								<a class="nickname" href="/u/606f73047662">驹强贯世文武英杰</a>
									<span data-type="comment_note" data-datetime="2018-05-31T16:27:56+08:00"> 发表了评论 · 05.31 16:27</span>
							</div>
						</div>
						<p class="comment">测试评论</p>
						<blockquote>
							<a class="title" href="/p/74d965068ca2">这里是测试标题</a>
							<p class="abstract">这里是测试内容</p>
							<div class="meta">
								<div class="origin-author">
									<a href="/users/606f73047662">驹强贯世文武英杰</a>
								</div>
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
			</ul>
		</div>
		
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


</style>