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