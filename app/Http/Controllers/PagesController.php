<?php

namespace App\Http\Controllers;

use App\BloodRequest;
use App\SubDistrict;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class PagesController extends Controller
{
    public function bloodDonation(Request $request) //function for route 'home' and '/'
    {
        $lastDonationDate = date('Y-m-d');
        BloodRequest::where('donation_date','<',$lastDonationDate)->delete();
        
        return view('blood-service.blood-donation');
    }

    public function showBloodRequestSubmit(Request $request)
    {
        return view('blood-service.blood_request');
    }
    
    public function donatorSearch()
    {
        return view('blood-service.blood-donation');
    }

    public function bloodRequests(Request $request){
        return view('blood-service.blood_requests_view');
    }

    public function essentialInfo(Request $request){
        return view('blood-service.essential_info');
    }

    public function showProfile(){
        return view('pages.profile');
    }
}
