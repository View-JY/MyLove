@extends('layouts.app')

@section('content')
<div class="row" id="app">
	<div class="col-xs-9">
		<div class="my">
			<div class="shdow">
				<h1>个人资料 <small>向全世界展示你自己</small></h1>
				<form action="/users/{{ $users -> id }}" method="post" accept-charset="utf-8">
					{{ csrf_field() }}
					{{ method_field('PUT') }}
					<ul>
						<li class="item">
							<div class="form-group clearfix">
								<label for="inputEmail3" class="col-sm-2 control-label">头像</label>
								<div class="col-sm-10">
									
								</div>
							</div>
						</li>
						<li class="item">
							<div class="form-group clearfix">
								<label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
								<div class="col-sm-10">
									<input type="text" name="name" value="{{ $users -> name }}" class="form-control" id="inputEmail3" placeholder="用户名" required />
								</div>
							</div>
						</li>
						<li class="item">
							<div class="form-group clearfix">
								<label for="inputEmail3"  class="col-sm-2 control-label">性别</label>
								<div class="col-sm-10">
									保密<input type="radio" name="sex" @if($data -> sex == 0) checked  @endif value="0">
									男<input type="radio" name="sex" @if($data -> sex == 1) checked  @endif checked value="1">
									女<input type="radio" name="sex" @if($data -> sex == 2) checked  @endif value="2">									
								</div>
							</div>
						</li>
						<li class="item">
							<div class="form-group clearfix">
								<label for="inputEmail3" class="col-sm-2 control-label">手机号码</label>
								<div class="col-sm-10">
									<input type="text" name="phone" value="{{ $data -> phone }}" class="form-control" id="inputEmail3" placeholder="手机号码" />
								</div>
							</div>
						</li>
						<li class="item">
							<div class="form-group clearfix">
								<label for="inputEmail3" class="col-sm-2 control-label">职位</label>
								<div class="col-sm-10">
									<input type="text" name="position" value="{{ $data -> position }}" class="form-control" id="inputEmail3" placeholder="职位" />
								</div>
							</div>
						</li>
						<li class="item">
							<div class="form-group clearfix">
								<label for="inputEmail3" class="col-sm-2 control-label">地址</label>
								<div class="col-sm-10">
									<input type="text" name="address" value="{{ $data -> address }}" class="form-control" id="inputEmail3" placeholder="地址" />
								</div>
							</div>
						</li>
						<li class="item">
							<div class="form-group clearfix">
								<label for="inputEmail3" class="col-sm-2 control-label">个人简介</label>
								<div class="col-sm-10">
									<input type="text" name="intro" value="{{ $data -> intro }}" class="form-control" id="inputEmail3" placeholder="个人简介" />
								</div>
							</div>
						</li>
						<li class="item">
							<div class="form-group clearfix">
								<label for="inputEmail3" class="col-sm-2 control-label">个人主页</label>
								<div class="col-sm-10">
									<input type="text" name="url" value="{{ $data -> url }}" class="form-control" id="inputEmail3" placeholder="个人主页" />
								</div>  
							</div>
						</li>
						<li class="item">
							<button type="submit" class="btn btn-warning btn-lg">点击修改个人资料</button>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

<style>
	body {
		background-color: #f4f5f5 !important;
	}
	.shdow h1 {
		margin-bottom: 25px;
	}
	.my {
		position: relative;
	    margin: 0 auto;
	    width: 100%;
	    max-width: 960px;
	    background-color: #FFF;
	}
	.shdow {
		position: relative;
	    padding: 25px 40px 15px;
	    background-color: #fff;
	    border-radius: 2px;
	}
	.shdow .item {
		width: 100%;
	    padding: 15px 0 0px;
	    border-top: 1px solid #f1f1f1;
	    list-style: none;
	    line-height: 36px;
	}
	.shdow .item span {
		font-size: 16px;
	    color: #333;
	    width: 100px;
	}
	.profile-input {
	    display: -webkit-box;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-box-pack: end;
	    -ms-flex-pack: end;
	    justify-content: flex-end;
	    -webkit-box-flex: 1;
	    -ms-flex: 1;
	    flex: 1;
	}
	.profile-input input.text {
		-webkit-box-flex: 1;
    	-ms-flex: 1;
	    flex: 1;
	    display: inline-block;
	    border: none;
	    outline: none;
	    color: #909090;
	    font-size: 1.3rem;
	}
</style>