<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [
        'name', 'quanlity', 'time', 'user_id', 'topic_id'
    ];

    public function topic()
    {
        return $this->belongsTo('App\Topic');
    }

    public function user_exam()
    {
        return $this->belongsTo('App\User');
    }

    public function result_exam()
    {
        return $this->hasMany('App\Result');
    }

    public function question_exam()
    {
        return $this->hasMany('App\Question');
    }
}

