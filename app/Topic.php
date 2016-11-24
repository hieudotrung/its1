<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
    	'name_topic'
    ];	
    
    public function exams()
    {
    	return $this->hasMany('App\Exam');
    }
}
