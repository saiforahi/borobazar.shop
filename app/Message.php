<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $table='messages';
    protected $fillable = [
        'from','to', 'data', 'related_service'
    ];
    public function user(){
        $this->belongsTo(User::class,'id','from');
    }
}
