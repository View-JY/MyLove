<?php

namespace App;

use App\Article;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\CategoryFollow;
use App\Collecte;

class User extends Authenticatable {
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	public function userInfo() {
		return $this->hasOne('App\UserInfo');
	}

	//文章相关操作
	public function article() {
		//当前的模型             //要关联的模型
		return $this->hasMany('App\Article');
	}

	//评论相关操作
	public function comment() {
		//当前的模型             //要关联的模型
		return $this->hasMany('App\Comment');
	}

	public function like() {
		//当前的模型         //要关联的模型
		return $this->hasMany('App\Like');
	}

	// 关注用户数据相关操作
	public function followers() {
		return $this->belongsToMany(User::Class, 'followers', 'user_id', 'follower_id');
	}

	public function followings() {
		return $this->belongsToMany(User::Class, 'followers', 'follower_id', 'user_id');
	}

	// 关注文章分类数据相关操作
	public function categoryUsers() {
		return $this->belongsToMany(User::Class, 'category_user', 'user_id', 'category_id');
	}

	public function categoryUserings() {
		return $this->belongsToMany(User::Class, 'category_user', 'category_id', 'user_id');
	}

	// 如何关注作者操作
	public function follow($user_id) {
		if (!is_array($user_id)) {
			$user_ids = compact('user_id');
		}
		$this->followings()->sync($user_id, false);
	}

	public function unfollow($user_id) {
		if (!is_array($user_id)) {
			$user_ids = compact('user_id');
		}
		$this->followings()->detach($user_id);
	}

	public function isFollowing($user_id) {
		return $this->followings->contains($user_id);
	}

	public function scopeAuthor($query, $name) {
		if (!empty($name)) {
			return $query->where('name', $name);
		}
	}

	public function dynamic() {
		return $this->hasMany('App\Dynamic');
	}

	public function articleType()
	{
		return $this ->hasMany(CategoryFollow::class);
	}

	public function collecte()
	{
		return $this ->hasMany(Collecte::class);
	}
}
