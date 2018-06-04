@extends('admin.layouts.app')

@section('content')
@include('common._message');
	<div class="row">
		<h2>添加页面</h2>
		<form action="/admin/adverts" method="post">
		{{ csrf_field() }}
		  <div class="form-group"style="width:900px;">
		    <label for="exampleInputEmail1">品牌名称</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="name">
		  </div>
		   <div class="form-group"style="width:900px;">
		    <label for="exampleInputEmail1">品牌链接</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="url">
		  </div>
		   <div class="form-group"style="width:900px;">
		    <label for="exampleInputEmail1">品牌logo</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="image">
		  </div>
		   <div class="form-group"style="width:900px;">
		    <label for="exampleInputEmail1">品牌详情</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="synopsis">
		  </div>
		   <div class="form-group"style="width:900px;">
		    <label for="exampleInputEmail1">权重</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="weight">
		  </div>


		  <button type="submit" style="width:900px;" class="btn btn-success">提交</button>
		</form>
	</div>
@endsection