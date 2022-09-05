<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use RalphJSmit\Filament\Notifications\Concerns\StoresNotificationInDatabase;
use RalphJSmit\Filament\Notifications\Contracts\AsFilamentNotification;
use RalphJSmit\Filament\Notifications\FilamentNotification;

class OfficesFindedNotification extends Notification implements AsFilamentNotification, ShouldQueue
{
    use Queueable, StoresNotificationInDatabase;


    private int $count;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(int $count)
    {
        $this->count = $count;
    }

    public static function toFilamentNotification(): FilamentNotification
    {
        return FilamentNotification::make()
            ->message(function (self $notification) {
                return "We have find {$notification->OfficeName} office(s) for you.";
            })
            ->icon('heroicons-o-check-circle', 'success');
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
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
            ->line('We have find' . $this->count . ' office(s) for you.')
            ->action('Show all the offices', url('/'))
            ->line('Thank you for using our application!');
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
            'count' => $this->count,
        ];
    }
}
