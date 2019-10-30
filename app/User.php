<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens,Notifiable;
    protected  $primaryKey = 'cell';
    protected $dates = ['last_donation_date'];
    public $incrementing = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','email', 'cell','blood_group','district','blood_organization','last_donation_date', 'password',
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_donation_date' =>'date:d-M-Y'
    ];

    public function findForPassport($username) {
        return $this->where('cell', $username)->first(); //customizing username field for passport
    }

    public function BloodRequest()
    {
        return $this->hasMany('App\BloodRequest','blood_group','blood_group'); //user has many blood requests
    }

}
