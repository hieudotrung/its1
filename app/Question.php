<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'content_question', 'exam_id'
    ];
    public function exams()
    {
        return $this->belongsToMany('App\Exam');
    }

    public function answers() 
    {
        return $this->belongsToMany('App\Answer');
    }
}
