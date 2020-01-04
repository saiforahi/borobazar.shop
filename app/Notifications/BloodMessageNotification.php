<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Auth;
use App\User;

class BloodMessageNotification extends Notification implements ShouldQueue
{
    use Queueable;
    public $message;
    public $reciever_id;
    public $message_id;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($message,$reciever_id,$message_id)
    {
        $this->message_id=$message_id;
        $this->message=$message;
        $this->reciever_id=$reciever_id;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        //return $notifiable->prefers_sms ? ['nexmo'] : ['mail', 'database','broadcast'];
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
            'message_id'=>$this->message_id,
            'from'=>['id'=>Auth::user()->id,'name'=>Auth::user()->name],
            'message'=>$this->message,
            'to' => ['id'=>$this->reciever_id,User::where('id',$this->reciever_id)->select('name as name')->first()]
        ];
    }
    public function toBroadcast($notifiable)
    {
        return [
            'message_id'=>$this->message_id,
            'from'=>['id'=>Auth::user()->id,'name'=>Auth::user()->name],
            'message'=>$this->message,
            'to' => ['id'=>$this->reciever_id,User::where('id',$this->reciever_id)->select('name as name')->first()]
        ];
    }
}
