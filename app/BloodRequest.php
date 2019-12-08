<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodRequest extends Model
{
    protected $table = 'blood_requests';
    protected $primaryKey = 'blood_request_id';
    protected $keyType = 'string';
    protected $dates=['donation_date'];
    public $incrementing = false;
    protected $fillable = ['blood_request_id','patient_name','submitted_by','relation_with_patient','contact_no','blood_group','quantity','patient_age','district_id','donation_place','donation_date','about_patient'];
    protected $casts = [
        'created_at' => 'date:d-M-Y',
        'updated_at' => 'date:d-M-Y',
        'donation_date' => 'date:d-M-Y'
    ];

    public function user(){
        return $this->belongsTo(Donar::class,'donar_id','submitted_by');
    }
}
