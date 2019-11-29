<?php

namespace App\Notifications;

use App\BloodGroup;
use App\User;
use Auth;
use App\BloodRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\BroadcastMessage;

class BloodRequestNotification extends Notification implements ShouldQueue
{
    use Queueable;
    public $blood_request;
    public $blood_group;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(BloodRequest $blood_request_param)
    {
        $this->blood_request=$blood_request_param;
        $this->blood_group=BloodGroup::where('id',$blood_request_param->blood_group)->select('bangla')->get();
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
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    /*public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }*/

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
            'submitted_by' => User::where('cell',$this->blood_request->submitted_by)->select('name','cell')->first(),
            'blood_group' => $this->blood_group,
            'quantity' => $this->blood_request->quantity,
            'contact_no' => $this->blood_request->contact_no,
            'donation_date'=> $this->blood_request->donation_date,
            'donation_place' => $this->blood_request->donation_place,
            'message' => $this->blood_request->submitted_by." ".$this->blood_request->donation_place." হতে ".$this->blood_request->quantity." ব্যাগ রক্তের জন্য অনুরোধ করেছেন",
        ];
    }

    /**
    * Get the broadcastable representation of the notification.
    *
    * @param  mixed  $notifiable
    * @return BroadcastMessage
    */
    public function toBroadcast($notifiable){
        return new BroadcastMessage([
            'blood_request_id'=> $this->blood_request->blood_request_id,
            'submitted_by' => User::where('cell',$this->blood_request->submitted_by)->select('name','cell')->first(),
            'blood_group' => $this->blood_group,
            'quantity' => $this->blood_request->quantity,
            'contact_no' => $this->blood_request->contact_no,
            'donation_date'=> $this->blood_request->donation_date,
            'donation_place' => $this->blood_request->donation_place,
            'message' => $this->blood_request->submitted_by." ".$this->blood_request->donation_place." হতে ".$this->blood_request->quantity." ব্যাগ রক্তের জন্য অনুরোধ করেছেন",
        ]);
    }
}
