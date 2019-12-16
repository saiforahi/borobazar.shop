<?php

namespace App\Http\Controllers;

use App\BloodRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


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
            return redirect('/')->with(['password_change_success'=>'আপনার পাসওয়ার্ড পরিবর্তিত ও সংরক্ষিত হয়েছে!']);
        }
        return back();
        
    }
    public function bloodDonation(Request $request) //function for route 'home' and '/'
    {
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
