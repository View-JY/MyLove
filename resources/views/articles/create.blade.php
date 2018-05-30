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
</head>
<body style="padding-top: 56px; min-width: 768px;">
	<a href="{{ url('/') }}">
    	<h1 class="feedback-page-logo">View <small>新视角</small></h1>
  	</a>

  	<div class="container" id="app">
  		<div class="row">
  			<div class="col-xs-12">
	  			<h1>新建文章 <small>留下您的作品吧</small></h1>

	  			<form action="/articles" method="post" accept-charset="utf-8" class="form-horizontal">
	  				{{ csrf_field() }}
	  				<!-- 文章标题 -->
	  				<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label" for="formGroupInputLarge">文章标题</label>
						<div class="col-sm-10">
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
						
						<label class="col-sm-2 control-label" for="formGroupInputLarge">文章分类</label>
						<div class="col-sm-10">
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
						<label class="col-sm-2 control-label" for="formGroupInputLarge">文章内容</label>
						<div class="col-sm-10">
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