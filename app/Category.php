<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Articles;
use App\CategoryFollow;

class Category extends Model {
	protected $table = 'categories';
	protected $primaryKey = 'id';
	protected $fillable = [
		'name', 'description',
	];

	public function Articles()
    {   //当前的模型              //要关联的模型
        return $this -> hasMany('App\Articles');
    }

    // 和用户进行关联
    public function categoryFollow($user_id)
    {
        return $this ->hasOne(CategoryFollow::class) ->where('user_id', $user_id);
    }
    
    // 和文章进行关联
    public function categoryFollows()
    {
        return $this ->hasOne(CategoryFollow::class);
    }
}
