<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodRequest extends Model
{
    protected $table = 'blood_requests';
    protected $primaryKey = 'blood_request_id';
    public $incrementing = false;
    protected $fillable = ['blood_request_id','name','relation','cell','blood_group','quantity','patient_age','district','donation_place','donation_date','about_patient'];
    protected $casts = [
        'created_at' => 'date:d-M-Y',
        'updated_at' => 'date:d-M-Y',
        'donation_date' => 'date:d-M-Y'
    ];

    public function User(){
        return $this->belongsTo('App\User','blood_group');
    }
}
