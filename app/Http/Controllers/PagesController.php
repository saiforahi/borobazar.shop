<?php

namespace App\Http\Controllers;

use App\SubDistrict;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    public function bloodDonation()
    {
        return view('blood-service.blood-donation');
    }

    public function bloodRequest()
    {
        $letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $numbers = rand(100000, 999999);
        $prefix = "BR";
        $sufix = $letters[rand(0, 25)];
        $blood_request_id = $prefix . $numbers . $sufix;
        while(!Validator::make([$blood_request_id],['blood_request_id'=>'unique:blood_requests,blood_request_id']))
        {
            $letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $numbers = rand(100000, 999999);
            $prefix = "BR";
            $sufix = $letters[rand(0, 25)];
            $blood_request_id = $prefix . $numbers . $sufix;
        }
        return view('blood-service.blood_request')->with('blood_request_id',$blood_request_id);
    }
    /*public function abc($blood_request_id)
    {
        return view('blood-service.blood_request')->with('blood_request_id',$blood_request_id);
    } */
    public function donatorSearch()
    {
        return view('blood-service.blood-donation');
    }
}
