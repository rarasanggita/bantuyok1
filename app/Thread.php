<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $table = 'threads';
    protected $dates = ['created_at','updated_at'];
    protected $fillable = ['title','school_name','address','phone','description','photo','date'];

    public function user(){
        return $this->belongsTo('App\User','user_id', 'id');
    }
    public function donates(){
        return $this->hasMany('App\Donate','thread_id','id');
    }
    public function comments(){
        return $this->hasMany('App\Comment','thread_id','id');
    }
    public function lectures(){
        return $this->belongsToMany('App\User', 'thread_user', 'thread_id', 'user_id');
    }
}
