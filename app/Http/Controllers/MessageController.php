<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    public function sendMessage(Request $request){
        $reciever=User::find($request->reciever_id);
        
    }

    public function showMessages(Request $request){

    }

    public function newMessage(Request $request){

    }
}
