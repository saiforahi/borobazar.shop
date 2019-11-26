<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //
    public function markNotificationAsRead($notification_id,$size){
        Auth::user()->notifications->where('id',$notification_id)->markAsRead();
        return response()->json(['notifications'=>Auth::user()->notifications->take($size),'total_unread'=>Auth::user()->unreadNotifications->count()]) ;
    }
}
