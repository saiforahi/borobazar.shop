<?php

namespace App\Listeners;

use App\User;
use Notification;
use App\Events\BloodRequestEvent;
use App\Notifications\BloodRequestNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class BloodRequestListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  BloodRequestEvent  $event
     * @return void
     */
    public function handle(BloodRequestEvent $event)
    {
       $users=User::join('user_details','user_details.user_cell','=','users.cell')->where('cell','!=',$event->user->cell)->where('blood_group',$event->blood_request->blood_group)->get();
       /*foreach($users as $user){
           $user->notify(new BloodRequestNotification($event->blood_request));
       }*/
        Notification::send($users, new BloodRequestNotification($event->blood_request));
    }
}
