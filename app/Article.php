<?php

namespace App;

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
}
