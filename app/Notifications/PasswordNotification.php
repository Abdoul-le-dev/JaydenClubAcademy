<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PasswordNotification extends Notification
{
    use Queueable;

    private $password;

    /**
     * Create a new notification instance.
     *
     * @param string $password
     * @return void
     */
    public function __construct($password)
    {
        $this->password = $password;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('Votre compte sur le site de Jadern')
                    ->greeting('Bonjour,')
                    ->line('Vous avez un compte sur le site de Jadern.')
                    ->line('Voici votre mot de passe : ' . $this->password)
                    ->line('Veuillez le changer dès que possible.')
                    ->action('Se connecter', url('/login'))
                    ->line('Merci d\'utiliser notre application !');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
