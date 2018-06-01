<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

	public function user()
	{    	           
	 	return $this -> belongsTo('App\User');
	}

	public function article()
	{
		return $this->belongsTo('App\Article');
	}

	// 举报评论
	public function commentReport($user_id) {
		return $this->hasOne('App\CommentReport')->where('user_id', $user_id);
	}

	//点赞评论
	public function commentZan($user_id) {
		return $this->hasOne('App\CommentZan')->where('user_id', $user_id);
	}
}
