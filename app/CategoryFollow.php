<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryFollow extends Model {
	protected $table = 'categoryfollows';
	protected $primaryKey = 'id';

	protected $fillable = [
		'user_id',
		'category_id',
	];
}
