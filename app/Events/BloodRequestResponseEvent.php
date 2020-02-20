<?php

namespace App\Events;
use App\User;
use App\BloodRequest;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class BloodRequestResponseEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $donar;
    public $blood_request;
    public $agree;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(BloodRequest $blood_request,User $user,$agree)
    {
        $this->blood_request=$blood_request;
        $this->donar=$user;
        $this->agree=$agree;
    }

    /*
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }*/
}
