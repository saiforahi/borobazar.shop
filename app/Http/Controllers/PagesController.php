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
            $totalRequest=DB::table('blood_requests')->where('blood_group',$request->user()->blood_group)->where('donation_place',$request->user()->district)->where('cell','!=',$request->user()->cell)->count();
            return view('blood-service.blood-donation')->with('totalRequest',$totalRequest);
        }
        return view('blood-service.blood-donation');
    }

    public function bloodRequestSubmit(Request $request)
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
        if(Auth::check())
        {
            $totalRequests=DB::table('blood_requests')->where('blood_group',$request->user()->blood_group)->where('donation_place',$request->user()->district)->where('cell','!=',$request->user()->cell)->count();
            return view('blood-service.blood_request')->with(['totalRequest'=>$totalRequests,'blood_request_id'=>$blood_request_id]);  //total requests number and unique blood request id value is being sent to the view
        }
        return view('blood-service.blood_request')->with(['totalRequest'=>0,'blood_request_id'=>$blood_request_id]);
    }
    
    public function donatorSearch()
    {
        return view('blood-service.blood-donation');
    }

    public function bloodRequests(Request $request){
        if(Auth::check())
        {
            $totalRequests=DB::table('blood_requests')->where('blood_group',$request->user()->blood_group)->where('donation_place',$request->user()->district)->where('cell','!=',$request->user()->cell)->count();
            return view('blood-service.blood_requests_view')->with(['totalRequest'=>$totalRequests]);  //total requests number and unique blood request id value is being sent to the view
        }
        return view('blood-service.blood_requests_view')->with(['totalRequest'=>0]);
    }

    public function essentialInfo(Request $request){
        if(Auth::check())
        {
            $totalRequests=DB::table('blood_requests')->where('blood_group',$request->user()->blood_group)->where('donation_place',$request->user()->district)->where('cell','!=',$request->user()->cell)->count();
            return view('blood-service.essential_info')->with(['totalRequest'=>$totalRequests]);  //total requests number and unique blood request id value is being sent to the view
        }
        return view('blood-service.essential_info')->with(['totalRequest'=>0]);
    }
}
