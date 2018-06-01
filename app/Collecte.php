<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Collecte extends Model
{
    protected $table = 'collectes';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'name', 'user_id'
    ];

    public function user()
    {
    	return $this ->belongsTo(User::class);
    }
}
