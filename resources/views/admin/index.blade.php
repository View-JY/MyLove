@extends('admin.layouts.app')

@section('content')
	<div class="row">
		<form class="" role="search" method="post" action="{{ route('index.store') }}" accept-charset="UTF-8" enctype="multipart/form-data">
		    {{ csrf_field() }}
		    
		    <input type="hidden" name="phototype_id" value="123" />

		    <div class="form-group">
		        <label>添加照片</label>
		        {{-- <input id="file-Portrait" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2" name="photo[]" required> --}}
		        <input id="file-Portrait" type="file" class="file" data-overwrite-initial="false" data-min-file-count="1" name="image">
		    </div>

		    <button type="submit" class="btn btn-success btn-lg">上传图片</button>
		</form>
	</div>

	
@endsection
