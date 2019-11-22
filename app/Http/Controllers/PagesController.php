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
        if(Auth::check())
        {
            
            //$totalRequest=DB::table('blood_requests')->where('blood_group',Auth::user()->user_details()->blood_group)->where('district_id',$request->user()->user_details()->district_id)->where('cell','!=',$request->user()->cell)->count();
            return view('blood-service.blood-donation');
        }
        return view('blood-service.blood-donation');
    }

    public function showBloodRequestSubmit(Request $request)
    {
        if(Auth::check())
        {
            $totalRequests=DB::table('blood_requests')->where('blood_group',$request->user()->blood_group)->where('donation_place',$request->user()->district)->where('contact_no','!=',$request->user()->cell)->count();
            return view('blood-service.blood_request')->with(['totalRequest'=>$totalRequests]);  //total requests number and unique blood request id value is being sent to the view
        }
        return view('blood-service.blood_request')->with(['totalRequest'=>0]);
    }
    
    public function donatorSearch()
    {
        return view('blood-service.blood-donation');
    }

    public function bloodRequests(Request $request){
        if(Auth::check())
        {
            $totalRequests=DB::table('blood_requests')->where('blood_group',$request->user()->blood_group)->where('donation_place',$request->user()->district)->where('contact_no','!=',$request->user()->cell)->count();
            return view('blood-service.blood_requests_view')->with(['totalRequest'=>$totalRequests]);  //total requests number and unique blood request id value is being sent to the view
        }
        return view('blood-service.blood_requests_view')->with(['totalRequest'=>0]);
    }

    public function essentialInfo(Request $request){
        if(Auth::check())
        {
            $totalRequests=DB::table('blood_requests')->where('blood_group',$request->user()->blood_group)->where('donation_place',$request->user()->district)->where('contact_no','!=',$request->user()->cell)->count();
            return view('blood-service.essential_info')->with(['totalRequest'=>$totalRequests]);  //total requests number and unique blood request id value is being sent to the view
        }
        return view('blood-service.essential_info')->with(['totalRequest'=>0]);
    }
}
