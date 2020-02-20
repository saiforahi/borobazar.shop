<?php

namespace App\Listeners;
use App\User;
use Illuminate\Support\Facades\Notification;
use App\Notifications\DonarResponse;
use App\Events\BloodRequestResponseEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class BloodRequestResponseListener implements ShouldQueue
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
     * @param  BloodRequestResponseEvent  $event
     * @return void
     */
    public function handle(BloodRequestResponseEvent $event)
    {
        $userToNotify=User::where('id',$event->blood_request->submitted_by)->first();
        Notification::send($userToNotify, new DonarResponse($event->blood_request,$event->donar,$event->agree));
    }
}
