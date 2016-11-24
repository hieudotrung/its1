<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'content', 'is_correct'
    ];
    public function questions() 
    {
        return $this->belongsToMany('App\Question');
    }
}
