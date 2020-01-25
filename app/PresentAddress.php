<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PresentAddress extends Model
{
    protected $table='present_addresses';
    protected $fillable = [
        'user_id','street','subdistrict', 'district', 'country','postcode'
    ];

    public function user(){
        return $this->belongsTo(User::class,'id','user_id');
    }
}
