<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';
    protected $primaryKey = 'name';
    public $incrementing = false;

    public function sub_districts()
    {
        return $this->hasMany('App\SubDistrict');
    }
}
