<?php

namespace App\Notifications;
use App\BloodRequest;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DonarResponse extends Notification implements ShouldQueue
{
    use Queueable;
    public $blood_request;
    public $donar;
    public $agree;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(BloodRequest $blood_request,User $donar,$agree)
    {
        $this->blood_request=$blood_request;
        $this->donar=$donar;
        $this->agree=$agree;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database','broadcast'];
    }

    

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'blood_request_id'=> $this->blood_request->blood_request_id,
            'responsed_by' => $this->donar,
            'message' => $this->donar->user_details->first_name." ".$this->donar->user_details->last_name." আপনার অনুরোধে রক্তদানে ইচ্ছুক",
        ];
    }

    /**
    * Get the broadcastable representation of the notification.
    *
    * @param  mixed  $notifiable
    * @return BroadcastMessage
    */
    public function toBroadcast($notifiable){
        return [
            'blood_request_id'=> $this->blood_request->blood_request_id,
            'responsed_by' => $this->donar,
            'message' => $this->donar->user_details->first_name." ".$this->donar->user_details->last_name." আপনার অনুরোধে রক্তদানে ইচ্ছুক",
        ];
    }
}
