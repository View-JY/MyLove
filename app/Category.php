<?php

namespace App;

use App\Article;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {
	protected $table = 'categories';
	protected $primaryKey = 'id';
	protected $fillable = [
		'name', 'description',
	];
	
	// 分类关联文章
    public function article()
    {   //当前的模型              //要关联的模型
        return $this -> hasMany(Article::class);
    }
}
