<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $dates = ['last_donation_date'];
    protected $casts = [
        'last_donation_date' =>'date:d-M-Y'
    ];
    protected $fillable = [
        'user_cell','blood_group','district_id','blood_organization','last_donation_date',
    ];
    public function user(){
        return $this->belongsTo(User::class,'cell','user_cell');
    }

    public function district(){
        return $this->belongsTo(District::class,'id','district_id');
    }

    public function BloodRequest()
    {
        return $this->hasMany('App\BloodRequest','blood_group','blood_group'); //user has many blood requests
    }
}
