<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $table = 'user_details';
    protected $primaryKey = 'user_id';
    //protected $keyType = 'string';
    protected $dates = ['passport_issue_date','birth_date'];
    protected $casts = [
        'passport_issue_date' => 'date:d-M-Y',
        'birth_date' => 'date:d-M-Y'
    ];
    protected $fillable = [
        'user_id','district_id'
    ];
    public function user(){
        return $this->belongsTo(User::class,'id','user_id');
    }

    public function district(){
        return $this->belongsTo(District::class,'id','district_id');
    }

    
}
