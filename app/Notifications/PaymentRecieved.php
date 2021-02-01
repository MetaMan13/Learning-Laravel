<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\NexmoMessage;

class PaymentRecieved extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public $userName;
    protected $amount;

    public function __construct($userName, $amount)
    {
        $this->userName = $userName;
        $this->amount = $amount;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database', 'nexmo'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject("Subscription Payment Recieved")
                    ->greeting("Hello there " . $this->userName)
                    ->line('Your payment was succesfully recieved!')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our services!');
    }

    public function toNexmo($notifiable)
    {
        return (new NexmoMessage)->content('Pozdrav od generisanog sms-a');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'amount' => $this->amount
        ];
    }
}
