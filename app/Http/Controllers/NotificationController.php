<?php

namespace App\Http\Controllers;

use App\BloodRequest;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //
    public function markNotificationAsRead($notification_id,$size){
        Auth::user()->notifications->where('id',$notification_id)->markAsRead();
        $notifications=Auth::user()->notifications->sortBy('data.donation_date')->take($size);
        $unreadNotifications=Auth::user()->unreadNotifications;
        $result=$unreadNotifications->merge($notifications);
        $notification_details=Auth::user()->notifications->where('id',$notification_id)->first();
        $blood_request=BloodRequest::where('blood_request_id',$notification_details->data['blood_request_id'])
        ->join('districts','blood_requests.district_id','=','districts.id')->join('users','users.cell','=','blood_requests.submitted_by')
        ->join('blood_groups','blood_requests.blood_group','=','blood_groups.id')
        ->select('blood_requests.blood_request_id','blood_requests.patient_name','users.name as submittedby','blood_requests.relation_with_patient','blood_requests.contact_no','blood_groups.bangla as blood_group','quantity','blood_requests.patient_age','districts.bengali_name as district_name','blood_requests.donation_place','blood_requests.donation_date','blood_requests.about_patient','blood_requests.created_at','blood_requests.updated_at')
        ->first();
        //$blood_request->donation_date=$blood_request->donation_date->format('d/m/Y');
        return response()->json(['blood_request'=>$blood_request,'notifications'=>$result,'total_unread'=>Auth::user()->unreadNotifications->count()]) ;
    }
}
