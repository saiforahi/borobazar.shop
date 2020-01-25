<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonarReviews extends Model
{
    protected $fillable=['user_id','given_by','rate','comment','blood_request_id'];
    //
    public function from_user(){
        return $this->belongsTo(User::class,'id','given_by');
    }

    public function to_donar(){
        return $this->belongsTo(User::class,'id','user_id');
    }
}
