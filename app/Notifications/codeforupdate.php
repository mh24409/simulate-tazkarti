<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification ;

class codeforupdate extends Notification
{
    use Queueable;

    private $code;

    public function __construct( $code)
    {
        $this->code = $code;
    }
    public function via($notifiable)
    {
        return ['database'];
    }


    public function toDatabase()
    {
        return [
            'text' => 'You need to update your information your code is',
            'code' => $this->code,
        ];
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
