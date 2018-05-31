<?php

namespace App;
use App\Category;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Article extends Model {
	protected $table = 'articles';
	protected $primarykey = 'id';
	protected $fillable = [
		'name',
		'body',
		'category_id',
		'user_id',
	];

	public function user() {
		//当前的模型 	           //要关联的模型
		return $this->belongsTo('App\User');
	}

	// 筛选我关注的文章展示
	public function scopeArticleType($query, $articleType) {
		if (!empty($articleType)) {
			return $query->whereIn('category_id', $articleType);
		}
	}

	public function category() {
		return $this->belongsTo('App\Category');
	}

	// 举报文章
	public function articleReport($user_id) {
		return $this->hasOne('App\ArticleReport')->where('user_id', $user_id);
	}
	// 喜欢文章
	public function articleLike($user_id) {
		return $this->hasOne('App\Like')->where('user_id', $user_id);
	}

	public function report() {
		return $this->hasMany('App\ArticleReport', 'id', 'article_id');
	}

	public function comments() {
		return $this->hasMany('App\Comment');
	}

}
