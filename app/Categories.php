<?php

namespace App;
use App\Articles;
use Illuminate\Database\Eloquent\Model;
use App\Category
use App\CategoryFollow;

class Categories extends Model
{
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
