<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    protected $table = 'donates';
    protected $dates = ['created_at','updated_at'];
    protected $fillable = ['total','payment_bill','status'];

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }

    public function thread(){
        return $this->belongsTo('App\Thread','thread_id','id');
    }
}
