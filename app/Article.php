<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $table = 'articles';
	protected $primarykey = 'id';
	protected $fillable = [
		'name',
		'body',
		'category_id',
		'user_id'
	];

	public function user()
	{   //当前的模型 	           //要关联的模型
 		return $this -> belongsTo('App\User');
	}

}
