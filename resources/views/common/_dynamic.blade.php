<!-- 实时动态 -->
<div class="dynamic">
	<div class="dynamic-body">
		<h4>随便吐槽点神马吧</h4>
		<form action="/dynamics" method="post" accept-charset="utf-8" style="margin-bottom: 10px;">
			{{ csrf_field() }}
			<input type="text" name="dynamic" placeholder="全世界都能看到你说的,请谨慎发言" required />
			<button type="submit" class="btn btn-info">点击发表动弹</button>
		</form>
		<ul class="dynamic-list">
			@foreach($dynamics as $dynamic)
			<li class="dynamic-item clearfix">
				<div class="media">
					<div class="media-left">
			            <a href="javascript:;">
			                <img class="media-img" src="https://lccdn.phphub.org/uploads/avatars/1_1479342408.png?imageView2/1/w/100/h/100">
			            </a>
			        </div>
			        <div class="media-right">
			        	<div class="media-body">
			        		<a href="javascript:;" class="">{{ $dynamic -> user -> name }}</a>:
							<span class="">{{ $dynamic -> dynamic }}</span>
			        	</div>
			        	<span class="meta-operation">{{ $dynamic -> created_at }}</span>
			        </div>
				</div>
			</li>
			@endforeach
			<a href="">查看更多</a>
		</ul>
	</div>
</div>
<hr/>