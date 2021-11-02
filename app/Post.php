<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
   protected $fillable = [
    'title',
    'body',
    'user_id'
];
        public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this::with('user')->orderBy('updated_at','DESC')->paginate($limit_count);
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}

