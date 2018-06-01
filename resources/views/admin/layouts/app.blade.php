<!DOCTYPE html>
<html ang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" type="text/css" href="{{  asset('css/admin.css') }}">
</head>
<body>
	<div class="" id="wrapper">
        @include('admin.layouts._nav')

		@include('admin.layouts._slidebar')

		<div id="page-wrapper">
			<div class="container" id="">
				 @yield('content')
			</div>
		</div>
	</div>

	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/jquery.metisMenu.js') }}"></script>
	<script src="{{ asset('js/custom-script.js') }}"></script>
	<script src="{{ asset('js/fileinput.min.js') }}"></script>
	<script src="{{ asset('js/fileinput_locale_zh.js') }}"></script>
	<script>
	    // Bootstrap FileInput
	    function initFileInput(ctrlName, uploadUrl) {    
	        var control = $('#' + ctrlName); 
	        control.fileinput({
	            language: 'zh', //设置语言
	            enctype: 'multipart/form-data',
	            uploadUrl: uploadUrl, //上传的地址
	            allowedFileExtensions : ['jpg', 'png','gif'],//接收的文件后缀
	            showUpload: false, //是否显示上传按钮
	            showCaption: true,//是否显示标题
	            browseClass: "btn btn-success", //按钮样式             
	            previewFileIcon: "<i class='glyphicon glyphicon-king'></i>", 
	            msgFilesTooMany: "选择上传的文件数量({n}) 超过允许的最大数值{m}！",
	            dropZoneEnabled: false,
	            maxFileCount: 4,
	            uploadAsync: false,
	        });
	    }
	    // 调用
	    initFileInput("file-Portrait", "{{route('users.update', Auth::id())}}");
	</script>
</body>
</html>