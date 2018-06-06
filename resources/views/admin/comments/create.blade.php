@extends('admin.layouts.app')

@section('content')
	<div class="row" style="padding: 10px 0 20px;border-bottom: 1px solid #f0f0f0;">		
		<table class="table table-bordered" style="margin-top: 15px;">
			<tr style="overflow:hidden; width:500px;">
				<th>ID</th>
				<th>用户ID</th>
				<th>文章ID</th>
				<th>内容</th>
			</tr>
			
			<tr >
				<td>{{ $comments -> id }}</td>
				<td>{{ $comments -> user_id }}</td>
				<td>{{ $comments -> article_id }}</td>
				<td>{{ $comments -> content }}</td>
			</tr>
			
			
		</table>
	</div>
@endsection