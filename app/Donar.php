<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donar extends Model
{
    //

    protected $table='donars';
    protected $dates=['last_donation_date'];
    protected  $primaryKey = 'donar_id';
    //protected $keyType = 'string';
    protected $casts = [
        'created_at' => 'date:d-M-Y',
        'updated_at' => 'date:d-M-Y',
        'last_donation_date' => 'date:d-M-Y'
    ];
    protected $fillable = [
        'donar_id','blood_group','district_id','blood_organization','last_donation_date',
    ];

    public function user(){
        return $this->belongsTo(User::class,'id','donar_id');
    }

    public function BloodRequest()
    {
        return $this->hasMany(BloodRequest::class,'submitted_by','donar_id'); //donar has many blood requests
    }
    /*public function receivesBroadcastNotificationsOn()
    {
        return 'donars.'.$this->donar_cell;
    }*/
}
