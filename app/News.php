<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title', 'content', 'topic_id', 'user_id'
    ];
    
    public function user_news()
    {
        return $this->belongsTo('App\User');
    }

    public function topic_news()
    {
        return $this->belongsTo('App\Topic');
    }

    public function comments()
    {
        $this->hasMany('App\Comment');
    }
}
