<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table = "user_infos";
    protected $primaryKey = "id";
    protected $fillable = [
    	'profile', 'name', 'sex', 'phone', 'position', 'address', 'intro', 'url', 'user_id',
    ];

    public function user()
    {
    	return $this ->belongsTo('App\User');
    }
}
