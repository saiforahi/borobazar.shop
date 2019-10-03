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

    public function bloodRequestsubmit()
    {
        $messages = [
            'name.required' => 'We need to know your name',
            'cell.unique' => 'This phone number is already registered!',
            'confirmed' => ':attribute does not match'
        ];

        $rules=[
            'name' => 'required|string|max:255',
            'relation' => 'required|string',
            'cell' => 'required|string|max:11',
            'bloodGroup' =>'required|string',
            'quantity' => 'required|numeric',
            'patientAge'=> 'required|string',
            'presentDistrict' => 'required|string',
            'donationPlace' => 'required|string',
            'donationDate'=>'required|string|after_or_equal:date',
            'password' =>'required|string|min:8|confirmed'
        ];
        $validator = Validator::make(request()->all(),$rules,$messages);
        return view('blood-service.blood_request');
    }
    public function donatorSearch()
    {

        return view('blood-service.blood-donation');
    }
}
