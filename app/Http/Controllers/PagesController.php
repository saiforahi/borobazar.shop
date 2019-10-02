<?php

namespace App\Http\Controllers;

use App\SubDistrict;
use Auth;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function bloodDonation()
    {
        return view('blood-service.blood-donation');
    }

    public function bloodRequest()
    {
        return view('blood-service.blood_request');
    }

    public function bloodRequestsubmit()
    {
        
        return view('blood-service.blood_request');
    }
    public function donatorSearch()
    {

        return view('blood-service.blood-donation');
    }
}
