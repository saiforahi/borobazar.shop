<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens,Notifiable;
    protected  $primaryKey = 'cell';
    
    public $incrementing = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','email', 'cell', 'password',
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
        'cell_verified_at' => 'datetime',
        'email_verified_at' => 'datetime',
    ];

    public function findForPassport($username) {
        return $this->where('cell', $username)->first(); //customizing username field for passport
    }

    public function user_details(){
        return $this->hasOne('App\UserDetails','user_cell','cell');
    }
}
