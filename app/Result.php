<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'user_id', 'exam_id', 'result'
    ];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function exams()
    {
        return $this->belongsTo('App\Exam');
    }
}
