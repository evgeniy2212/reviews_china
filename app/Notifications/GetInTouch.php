<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class GetInTouch extends Notification
{
    use Queueable;

    private $name;
    private $email;
    private $phone;
    private $message;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(
        string $name, string $phone, string $email, string $message
    )
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
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
                    ->line('獲取聯繫信息.')
                    ->line('姓名: ' . $this->name)
                    ->line('電子郵件: ' . $this->email)
                    ->line('電話: ' . $this->phone)
                    ->line('信息: ' . $this->message)
//                    ->action('Notification Action', url('/'))
                    ->line('感謝您使用我們的應用程序!');
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
            //
        ];
    }
}
