<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>创建文章</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/simditor.css') }}">
    <style type="text/css" media="screen">
    	.simditor .simditor-body {
    		height: 550px;
    	}
    </style>
</head>
<body style="padding-top: 56px; min-width: 768px;">
	<a href="{{ url('/') }}">
    	<h1 class="feedback-page-logo">View <small>新视角</small></h1>
  	</a>

  	<div class="container" id="app" style="width:100%;">
  		<div class="row">
			<div class="col-xs-3">
				<div class="ant" style="position: relative; display: block; width: 100%; height: 100%; overflow-y: auto; background-color: #404040; color: #f2f2f2; z-index: 100; margin-top: 50px;"	>
					<div class="ant-title" style="padding: 30px 18px 5px; text-align: center;"	>
						<a href="" style="display: block; font-size: 15px; padding: 9px 0; color: #ec7259; border: 1px solid rgba(236,114,89,.8); border-radius: 20px; -webkit-transition: border-color .2s ease-in; -o-transition: border-color .2s ease-in; transition: border-color .2s ease-in; text-decoration: none;">回首页</a>
					</div>
					<div style="padding: 0 15px; margin-top: 20px; margin-bottom: 10px;">
						<div class="" style="cursor: pointer; color: #f2f2f2;  -webkit-transition: color .2s cubic-bezier(.645,.045,.355,1);  -o-transition: color .2s cubic-bezier(.645,.045,.355,1); transition: color .2s cubic-bezier(.645,.045,.355,1); margin-bottom: 15px;">
							<i class="fa fa-plus"></i>
							<span style="margin-left: 4px; font-size: 16px;"><i class="glyphicon glyphicon-plus"></i> 新建文集</span>
						</div>
						<ul	style="padding-left: 0; position: relative; margin-bottom: 50px; z-index: 0; background-color: #8c8c8c;">
							<li style="background-color: #666; border-left: 3px solid #ec7259; padding-left: 12px;position: relative; line-height: 40px; list-style: none; font-size: 15px; color: #f2f2f2; background-color: #404040; padding: 0 15px; cursor: pointer; -webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none; -webkit-transition: padding .2s; -o-transition: padding .2s; transition: padding .2s;">
								<span>ViewJY在北京</span>
							</li>
						</ul>
					</div>
				</div>
			</div>

  			<div class="col-xs-9">

	  			<form action="/articles" method="post" accept-charset="utf-8" class="form-horizontal">
	  				{{ csrf_field() }}
	  				<!-- 文章标题 -->
	  				<div class="form-group form-group-lg">
						{{-- <label class="col-sm-2 control-label" for="formGroupInputLarge">文章标题</label> --}}
						<div class="col-sm-12">
							<input class="form-control" type="text" id="formGroupInputLarge" placeholder="输入标题" name="name" required />
							 @if ($errors->has('name'))
			                    <span class="help-block">
			                        <strong>{{ $errors->first('name') }}</strong>
			                    </span>
			               	 @endif
						</div>

					</div>

					<!-- 文章分类 -->
					<div class="form-group form-group-lg">

						{{-- <label class="col-sm-2 control-label" for="formGroupInputLarge">文章分类</label> --}}
						<div class="col-sm-12">
							@foreach($articles as $v)
							<label class="category">
	    						<input type="radio" name="category_id" id="optionsRadios1" value="{{ $v ->id }}" required>
	    						<span>{{ $v -> name }}</span>
	  						</label>
	  						@endforeach
  						</div>
					</div>

					<!-- 文章内容 -->
					<div class="form-group form-group-lg">
						{{-- <label class="col-sm-2 control-label" for="formGroupInputLarge">文章内容</label> --}}
						<div class="col-sm-12">
	                        <textarea name="body" class="form-control" id="editor" rows="3" placeholder="输入正文" required></textarea>
	                        @if ($errors->has('body'))
		                        <span class="help-block">
		                            <strong>{{ $errors->first('body') }}</strong>
		                        </span>
		                    @endif
	                    </div>
                    </div>
                    <!-- 确认并发布 -->
                    <button class="btn btn-primary btn-lg pull-left">确认并发布</button>
	  			</form>
  			</div>
  		</div>
  	</div>

  	<script type="text/javascript"  src="{{ asset('js/app.js') }}"></script>
  	<script type="text/javascript"  src="{{ asset('js/module.min.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/hotkeys.min.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/uploader.min.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/simditor.min.js') }}"></script>
    <script>
    	// 编辑器初始化
	    $(document).ready(function(){
	        var editor = new Simditor({
	            textarea: $('#editor'),
	            upload: {
	                url: '{{ url('/') }}',
	                params: { _token: '{{ csrf_token() }}' },
	                fileKey: 'upload_file',
	                connectionCount: 3,
	                leaveConfirm: '文件上传中，关闭此页面将取消上传。'
	            },
	            pasteImage: true,
	        });
	    });
    </script>
</body>
</html>