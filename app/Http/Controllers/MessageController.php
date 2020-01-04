<?php

namespace App\Http\Controllers;
use App\User;
use App\Notifications\BloodMessageNotification;
use Illuminate\Http\Request;
use App\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class MessageController extends Controller
{
    //
    public function sendMessage(Request $request){
        $new_message=Message::create([
            'from'=> Auth::user()->id,
            'to' => $request->to,
            'data' => $request->message,
            'related_service' => 'blood_request'
        ]);
        $reciever=User::find($request->to);
        $reciever->notify(new BloodMessageNotification($request->message,$request->to,$new_message->id));
        return $reciever;
    }

    public function getMessages($size){
        if(Auth::user()->notifications->where('type','App\\Notifications\\BloodMessageNotification')->count()>0){
            $messages=Auth::user()->notifications->where('type','App\\Notifications\\BloodMessageNotification')->take($size);
            $peoples=DB::table('notifications')->where('type','App\\Notifications\\BloodMessageNotification')->select('data->from as people')->distinct()->get();
            foreach($peoples as $people){
                
            }
            $conversations=DB::table('notifications')->where('type','App\\Notifications\\BloodMessageNotification')->groupBy('data->from')->select('data->from as people','data->message as message')->distinct()->get();
            
            $total_unread_message=Auth::user()->unreadnotifications->where('type','App\\Notifications\\BloodMessageNotification')->count();
            return response()->json(['messages'=>$messages,'total_unread_message'=>$total_unread_message,'peoples'=>$peoples,'conversations'=>$conversations]);
        }
        else{
            return response()->json(['result'=>'no messages']);
        }
        
    }

    public function newMessage(Request $request){

    }
}
