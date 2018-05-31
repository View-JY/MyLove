<?php

namespace App;

use App\Article;
use App\CategoryFollow;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {
	protected $table = 'categories';
	protected $primaryKey = 'id';
	protected $fillable = [
		'name', 'description',
	];

	public function articles() {
		//当前的模型              //要关联的模型
		return $this->hasMany(Article::class);
	}

	// 和用户进行关联
	public function categoryFollow($user_id) {
		return $this->hasOne(CategoryFollow::class)->where('user_id', $user_id);
	}

	// 和文章进行关联
	public function categoryFollows() {
		return $this->hasOne(CategoryFollow::class);
	}
}
