<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';
    protected $primaryKey = 'id';
    public $incrementing = false;
    
    public function subdistricts()
    {
        return $this->hasMany('App\SubDistrict','district_id','id');
    }

    public function user_details(){
        return $this->hasMany('App\UserDetails','district_id','id');
    }

}
