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
        'passport_issue_date' => 'date:Y-m-d',
        'birth_date' => 'date:Y-m-d'
    ];
    protected $fillable = [
        'user_id','first_name','last_name'
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    
}
