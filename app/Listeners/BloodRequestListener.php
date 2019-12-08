<?php

namespace App\Listeners;

use App\User;
use Illuminate\Support\Facades\Notification;
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
        $lastDonationDate = date('Y-m-d', strtotime('-3 month'));
        $users=User::where('users.id','!=',$event->user->id)->join('donars','donars.donar_id','=','users.id')->where('donars.blood_group',$event->blood_request->blood_group)->where('donars.last_donation_date','<=',$lastDonationDate)->get();
        Notification::send($users, new BloodRequestNotification($event->blood_request));
    }
}
