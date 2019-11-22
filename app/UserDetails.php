<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $table = 'user_details';
    protected $primaryKey = 'user_cell';
    protected $keyType = 'string';
    protected $dates = ['last_donation_date','passport_issue_date','birth_date'];
    protected $casts = [
        'last_donation_date' =>'date:d-M-Y',
        'passport_issue_date' => 'date:d-M-Y',
        'birth_date' => 'date:d-M-Y'
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

    public function secondary_cells(){
        return $this.hasMany(SecondaryCell::class,'primary_cell','user_cell');
    }
}
