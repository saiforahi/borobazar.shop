<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermanentAddress extends Model
{
    protected $table='permanent_addresses';
    protected $fillable = [
        'user_id','street','subdistrict', 'district', 'country','postcode'
    ];

    public function user(){
        return $this->belongsTo(User::class,'id','user_id');
    }
}
