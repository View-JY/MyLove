@extends('admin.layouts.app')

@section('content')
@include('common._message')
	<div class="row">
		<h2>{{ $title }}</h2>
		@foreach($adverts as $advert)
		<form action="/admin/adverts/{{ $advert -> id }}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		  <div class="form-group"style="width:900px;">
		    <label for="exampleInputEmail1">品牌名称</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="name" value="{{ $advert -> name }}">
		  </div>
		   <div class="form-group"style="width:900px;">
		    <label for="exampleInputEmail1">品牌链接</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="url" value="{{ $advert -> url }}">
		  </div>
		   <div class="form-group"style="width:900px;">
		    <label for="exampleInputEmail1">品牌logo</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="image" value="{{ $advert -> image }}">
		  </div>
		   <div class="form-group"style="width:900px;">
		    <label for="exampleInputEmail1">品牌详情</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="synopsis" value="{{ $advert -> synopsis }}">
		  </div>
		   <div class="form-group"style="width:900px;">
		    <label for="exampleInputEmail1">权重</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="weight" value="{{ $advert -> weight }}">
		  </div>


		  <button type="submit" style="width:900px;" class="btn btn-success">提交</button>
		</form>
		@endforeach
	</div>
@endsection