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
				<li>
					<div class="content">
						<a href="javascript:;" class="title" target="_blank">测试标题</a>
						<p class="abstract">测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容</p>
						<div class="meta">
							<a class="nickname" target="_blank" href="/u/e6beb74f209a">测试作者</a>
							<a target="_blank" href="/p/fb06d3377281#comments">
					        	<i class="glyphicon glyphicon-comment"></i> 1
							</a>
							<span><i class="glyphicon glyphicon-heart"></i> 7</span>
						</div>
					</div>
				</li>
				
				<!-- 有图片结构 -->
				<li class="have-img">
					<a class="wrap-img" href="{{ url('/') }}" target="_blank">
  						<img class="img-blur-done img-thumbnail" src="http://upload-images.jianshu.io/upload_images/6313559-808cc3e14ad55535.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/300/h/240" alt="120">
    				</a>
					<div class="content">
						<a href="javascript:;" class="title" target="_blank">测试标题</a>
						<p class="abstract">测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容测试文章内容</p>
						<div class="meta">
							<a class="nickname" target="_blank" href="/u/e6beb74f209a">测试作者</a>
							<a target="_blank" href="/p/fb06d3377281#comments">
					        	<i class="glyphicon glyphicon-comment"></i> 1
							</a>
							<span><i class="glyphicon glyphicon-heart"></i> 7</span>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- Right -->
	<div class="col-xs-3 aside">
		<!-- 注册登录 -->
		@if(!Auth::check())
		<div class="shadow section auth-section">
			<div class="title">
				<h3>View <small>mylove.com</small></h3>
			</div>
			<div class="slogan">
				<p>一个不同凡响的社区<small>......</small></p>
				<p>在这里你能找到快乐<small>......</small></p>
				<p>在这里你能找回自己<small>......</small></p>
				<p>赶快来加入我们社区</p>
			</div>
			<div class="input-group">
				<form action="{{ route('register') }}" method="post" accept-charset="utf-8">
					{{ csrf_field() }}
					<div class="input-box">
						<input name="name" maxlength="20" placeholder="用户名" class="input" required>
						@if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
					</div>
					<div class="input-box">
						<input name="email" maxlength="20" placeholder="邮箱" class="input" required>
						@if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
					</div>
					<div class="input-box">
						<input name="password" maxlength="20" placeholder="密码" class="input" required>
						@if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
					</div>
					<div class="input-box">
						<input name="password_confirmation" maxlength="20" placeholder="确认密码" class="input" required>
						@if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
					</div>
					<button type="submit" class="btn submit-btn">立即注册</button>
				</form>
			</div>
		</div>
		<hr>
		@endif
		<!-- 推荐作者 -->
		<div class="recommended-authors">
			<div class="title">
				<span>推荐作者</span> <small>帅哥美女全在这里</small>
				<a class="page-change">
					<i class="glyphicon glyphicon-refresh" style="transform: rotate(0deg);"></i> 换一批
    			</a>
    		</div>
    		<ul class="list">
    			@foreach($users as $user)
    			<li>
    				<a href="javascript:;" target="_blank" class="avatar">
    					<img src="http://upload.jianshu.io/users/upload_avatars/8972166/bd7164e9-2272-4ecf-91d0-f4903a150d4f.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/96/h/96">
    				</a> 
    				<a class="follow">
    					<i class="glyphicon glyphicon-plus"></i> 点击加关注
					</a> 
					<a href="javascript:;" target="_blank" class="name">{{ $user ->name }}</a> 
					<p>{{ $user ->email }} 3k喜欢</p>
				</li>
				@endforeach
    		</ul>
    		<a href="{{ route('users.index') }}" target="_blank" class="find-more">点击查看全部作者 <i class="glyphicon glyphicon-menu-right"></i></a>
		</div>
		<hr>
		<!-- 实时动态 -->
		<div class="dynamic">
			<div class="dynamic-body">
				<h4>随便吐槽点神马吧 <small>全世界都能看到你说的</small></h4>
				<form action="" method="post" accept-charset="utf-8" style="margin-bottom: 10px;"> 
					<input type="text" name="dynamic" placeholder="说点想说的吧" required />
					<button type="submit" class="btn btn-info">点击发表动弹</button>
				</form>
				<ul class="dynamic-list">
					<li class="dynamic-item clearfix">
						<div class="media">
							<div class="media-left">
					            <a href="javascript:;">
					                <img class="media-img" src="https://lccdn.phphub.org/uploads/avatars/1_1479342408.png?imageView2/1/w/100/h/100">
					            </a>
					        </div>
					        <div class="media-right">
					        	<div class="media-body">
					        		<a href="javascript:;" class="">Summer</a>:
									<span class="">机器能解析的代码，谁都能写，真正有挑战的是写那些随便都能被看懂的代码。</span>
					        	</div>
					        	<span class="meta-operation">45分钟前 </span>
					        </div>
						</div>		
					</li>
					<li class="dynamic-item clearfix">
						<div class="media">
							<div class="media-left">
					            <a href="javascript:;">
					                <img class="media-img" src="https://lccdn.phphub.org/uploads/avatars/1_1479342408.png?imageView2/1/w/100/h/100">
					            </a>
					        </div>
					        <div class="media-right">
					        	<div class="media-body">
					        		<a href="javascript:;" class="">Summer</a>:
									<span class="">机器能解析的代码，谁都能写，真正有挑战的是写那些随便都能被看懂的代码。</span>
					        	</div>
					        	<span class="meta-operation">45分钟前 </span>
					        </div>
						</div>		
					</li>
				</ul>
			</div>
		</div>
		<hr>
		<!-- 友情链接 -->
		<div class="advertising">
			<div class="banner section shadow banner-section">
				<a href="#" rel="nofollow noopener noreferrer" target="_blank">
					<div class="lazy thumb banner-image loaded" style="background-image: url('/images/banner_1.jpg');background-size: cover;"></div>
				</a>
			</div>
		</div>
		<hr>
		<!-- 说明 -->
		<div class="Footer">
			<a class="Footer-item" target="_blank" href="{{ url('/') }}">View版权所有</a>
			<span class="Footer-dot"></span>
			<br>
			<a class="Footer-item" target="_blank" href="{{ url('/') }}">本项目由：</a>
			<span class="Footer-dot"></span>
			<br>
			<a class="Footer-item" target="_blank" href="{{ url('/') }}">马四民</a>
			<a class="Footer-item" target="_blank" href="{{ url('/') }}">姚红县</a>
			<a class="Footer-item" target="_blank" href="{{ url('/') }}">王亚雄</a>
			<a class="Footer-item" target="_blank" href="{{ url('/') }}">焦阳</a>
			<a class="Footer-item" target="_blank" href="{{ url('/') }}">参与设计编码</a>
		</div>
	</div>
</div>
@endsection
