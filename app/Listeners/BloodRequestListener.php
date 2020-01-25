<?php

namespace App\Listeners;

use App\User;
use Illuminate\Support\Facades\Notification;
use App\Events\BloodRequestEvent;
use App\Notifications\BloodRequestNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Database\Eloquent\Builder;

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
        $lastDonationDate = date('Y-m-d', strtotime('-4 month'));
        $users = User::whereHas('donars', function (Builder $query) use($lastDonationDate,$event) {
            $query->where('blood_group',$event->blood_request->blood_group)->where('last_donation_date','<=',$lastDonationDate);
        })->where('id','!=',$event->user->id)->get();
        Notification::send($users, new BloodRequestNotification($event->blood_request));
    }
}
