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