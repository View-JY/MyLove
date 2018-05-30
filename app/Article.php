<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;
use App\Category;

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

	// 筛选我关注的文章展示
	public function scopeArticleType($query, $articleType)
	{
		if ( !empty($articleType) ) {
			return $query ->whereIn('category_id', $articleType);
		}
	}

	public function category()
	{
		return $this ->belongsTo(Category::class);
	}
}
