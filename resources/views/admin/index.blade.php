@extends('admin.layouts.app')

@section('content')
	<div class="row">
		<form class="" role="search" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
		    {{ csrf_field() }}
		    
		    <input type="hidden" name="phototype_id" value="" />

		    <div class="form-group">
		        <label>添加照片</label>
		        {{-- <input id="file-Portrait" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2" name="photo[]" required> --}}
		        <input id="file-Portrait" type="file" class="file" data-overwrite-initial="false" data-min-file-count="1" name="image">
		    </div>

		    <button type="submit" class="btn btn-success btn-lg">上传图片</button>
		</form>
	</div>

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
@endsection
