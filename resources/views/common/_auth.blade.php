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
			@if(Auth::check())
				@if (Auth::user()->isFollowing($user->id))
				<form action="{{ route('followers.destroy', $user->id) }}" method="post">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<button type="submit" class="follow" style="background: none; outline: 0 none; border: 0 none;"><span class="glyphicon glyphicon-heart"></span> 取消关注</button>
				</form>
			    @else
			      <form action="{{ route('followers.store', $user->id) }}" method="post">
			        {{ csrf_field() }}
			        <button type="submit" class="follow" style="background: none; outline: 0 none; border: 0 none;"><span class="glyphicon glyphicon-heart"></span> 点击关注作者</button>
			      </form>
			    @endif
		    @endif
			<a href="javascript:;" target="_blank" class="name">{{ $user ->name }}</a>
			<p>{{ $user ->email }} 3k喜欢</p>
		</li>
		@endforeach
	</ul>
	<a href="{{ route('users.index') }}" target="_blank" class="find-more">点击查看全部作者 <i class="glyphicon glyphicon-menu-right"></i></a>
</div>
<hr>