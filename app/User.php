<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password','is_admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function User_exams()
    {
        return $this->hasMany('App\Exam');
    }
    public function news_user() 
    {
        return $this->hasMany('App\News');
    }
    public function result_user() 
    {
        return $this->hasMany('App\User');
    }
}
