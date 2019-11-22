<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\BloodRequest;
use App\User;
//implements ShouldBroadcast
class BloodRequestEvent 
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $blood_request;
    public $user;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(BloodRequest $blood_request,User $user)
    {
        //
        $this->blood_request=$blood_request;
        $this->user=$user;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    /*public function broadcastOn()
    {
        return new Channel('blood.'.$this->blood_request->blood_group);
        //return new Channel('user.'.$this->user->cell);
    }*/
}
