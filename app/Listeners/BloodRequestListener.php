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
        $lastDonationDate = date('Y-m-d', strtotime('-3 month'));
        $users=User::where('cell','!=',$event->user->cell)->join('donars','donars.donar_cell','=','users.cell')->where('donars.blood_group',$event->blood_request->blood_group)->where('donars.last_donation_date','<=',$lastDonationDate)->get();
        Notification::send($users, new BloodRequestNotification($event->blood_request));
    }
}
