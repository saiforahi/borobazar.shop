<?php

namespace App;

use App\Notifications\BloodRequestNotification;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;
    protected  $primaryKey = 'id';
    //protected $keyType = 'string';
    //public $incrementing = false;
    protected $table='users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','email', 'cell', 'password','api_token'
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
        'cell_verified_at' => 'date:d-M-Y',
        'email_verified_at' => 'date:d-M-Y',
    ];

    public function findForPassport($username) {
        return $this->where('id', $username)->first(); //customizing username field for passport
    }

    public function user_details(){
        return $this->hasOne(UserDetails::class,'user_id','id');
    }


    public function donars(){
        return $this->hasOne(Donar::class,'donar_id','id');
    }

    public function secondary_cells(){
        return $this->hasMany(SecondaryCell::class,'primary_cell','cell');
    }
}
