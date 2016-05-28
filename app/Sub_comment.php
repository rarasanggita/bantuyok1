<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_comment extends Model
{
    protected $table = 'sub_comments';
    protected $dates = ['created_at','updated_at'];
    protected $fillable = ['sub_comment','date'];

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
    public function comment(){
        return $this->belongsTo('App\Comment','comment_id','id');
    }
}
