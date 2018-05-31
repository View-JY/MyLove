<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class CategoryFollow extends Model {
	protected $table = 'categoryfollows';
	protected $primaryKey = 'id';

	protected $fillable = [
		'user_id',
		'category_id',
	];

	public function user()
	{
		return $this ->belongsTo(User::class);
	}
}
