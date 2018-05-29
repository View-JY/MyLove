<?php

namespace App;
use App\Articles;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
     public function Articles()
    {   //当前的模型              //要关联的模型
        return $this -> hasMany('App\Articles');
    }
}
