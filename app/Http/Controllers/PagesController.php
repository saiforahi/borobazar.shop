<?php

namespace App\Http\Controllers;

use App\BloodRequest;
use App\Donar;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use DB;

class PagesController extends Controller
{
    public function showQuestions(){
        return view('pages.security-questions');
    }

    public function submit_answers(Request $request){
        return view('auth.custom_reset_password')->with(['cell'=>$request->cell]);
    }

    public function passwordReset(Request $request,$cell){
        if(Validator::make([$request->password],['password'=>'required|string|min:8|confirmed'])){
            $new_password = Hash::make($request->password);
            User::where('cell',$cell)->first()->forceFill([
            'password' => $new_password,
            ])->save();
            return redirect('/')->with(['password_change_success'=>'New Password has been set!']);
        }
        return back();
        
    }
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
