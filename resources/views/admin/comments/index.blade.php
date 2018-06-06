@extends('admin.layouts.app')

@section('content')
	<div class="row" style="padding: 10px 0 20px;border-bottom: 1px solid #f0f0f0;">		
		<table class="table table-bordered" style="margin-top: 15px;">
			<tr style="overflow:hidden; width:500px;">
				<th>ID</th>
				<th>用户ID</th>
				<th>评论ID</th>
				<th>操作</th>
			</tr>
			@foreach($comments_reports as $comments_report)
			<tr >
				<td>{{ $comments_report -> id }}</td>
				<td>{{ $comments_report -> user_id }}</td>
				<td>{{ $comments_report -> comment_id }}</td>
				<td>
					<a href="comments/{{ $comments_report -> id }}" class="btn btn-large btn-primary ">查看详情</a>
					<form action="{{ route('comments.destroy', ['id' => $comments_report ->id, 'name' => 'wx']) }}" method="post" style="display: inline;">
	                    {{ csrf_field() }}
	                    {{ method_field('DELETE') }}
	                    <input type="submit" value="无效" class="btn btn-warning">
	                </form>
					 <form action="comments/{{ $comments_report -> id }}?name=tg " method="post" style="display: inline;">
	                    {{ csrf_field() }}
	                    {{ method_field('DELETE') }}
	                    <input type="submit" value="举报通过" class="btn btn-danger">
	                </form>
				</td>
			</tr>
			@endforeach
			
		</table>
		{!! $comments_reports->render() !!}
	</div>
@endsection