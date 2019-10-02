<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodRequest extends Model
{
    protected $table = 'blood_requests';
    protected $primaryKey = 'blood_request_id';
    public $incrementing = false;
}
