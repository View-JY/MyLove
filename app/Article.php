<?php

namespace App;
use App\User;
use App\Category;
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

	// 文章关联分类
	public function category()
	{   //当前的模型 	           //要关联的模型
 		return $this -> belongsTo(category::class);
	}

}
