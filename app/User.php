<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $dates = ['created_at','updated_at'];
    protected $fillable = ['name','email','username','address','phone','photo','password'];

    public  function  role(){
        return $this->belongsTo('App\Role','role_id', 'id');
    }
    public function threads(){
        return $this->belongsToMany('App\Thread','thread_user','user_id','threads_id');
    }
    public function donates(){
        return $this->hasMany('App\Donate','user_id','id');
    }
    public function comments(){
        return $this->hasMany('App\Comment','user_id','id');
    }
    public function sub_comments(){
        return $this->hasMany('App\Sub_comment','user_id','id');
    }
    public function lectures(){
        return $this->hasMany('App\Lecture','user_id','id');
    }

}
