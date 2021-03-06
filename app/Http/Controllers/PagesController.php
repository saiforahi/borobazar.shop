<?php

namespace App\Http\Controllers;

use App\BloodRequest;
use App\User;
use App\Donar;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use VisitLog;
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
    public function show_home(Request $request) //function for route 'home' and '/'
    {
        VisitLog::save();
        return view('home');
    }
    public function bloodDonation(Request $request) //function for route 'home' and '/'
    {
        return view('blood-service.blood-donation');
    }

    public function donar_info(){
        return view('blood-service.donar_info');
    }
    public function show_dash(Request $request){
        VisitLog::save();
        return view('dashboard');
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

    public function showMyRequests(){
        return view('blood-service.submitted_blood_requests');
    }

    public function tutorHome(){
        return view('home-tutor.tutor_home');
    }
    public function tutorRegistration(){
        return view('home-tutor.tutor_register');
    }
}
