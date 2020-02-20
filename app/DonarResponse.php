<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonarResponse extends Model
{
    //
    protected $fillable=[
        'donar_id','blood_request_id'
    ];
    protected $casts = [
        'created_at' => 'date:d-M-Y',
        'updated_at' => 'date:d-M-Y',
    ];

    public function donars(){
        return $this->belongsTo(Donar::class,'donar_id','donar_id');
    }
}
