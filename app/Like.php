<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function user() {
		//当前的模型 	        //要关联的模型
		return $this->belongsTo('App\User');
	}

	public function article() {
		return $this->belongsTo('App\Article');
	}

}
