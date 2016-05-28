<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $dates = ['created_at','updated_at'];
    protected $fillable = ['comment', 'date'];

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
    public function thread(){
        return $this->belongsTo('App\Thread','thread_id','id');
    }
}
