<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id', 'news_id', 'title', 'content'
    ];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function news()
    {
        return $this->belongsTo('App\News');
    }
}
