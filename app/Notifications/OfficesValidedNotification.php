<?php

namespace App\Notifications;

use App\Models\Office;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use RalphJSmit\Filament\Notifications\Concerns\StoresNotificationInDatabase;
use RalphJSmit\Filament\Notifications\Contracts\AsFilamentNotification;
use RalphJSmit\Filament\Notifications\FilamentNotification;

class OfficesValidedNotification extends Notification implements AsFilamentNotification, ShouldQueue
{
    use Queueable, StoresNotificationInDatabase;


    private Office $office;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Office $office)
    {
        $this->office = $office;
    }


    public static function toFilamentNotification(): FilamentNotification
    {
        return FilamentNotification::make();
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
            ->line('We have valided you office: ' . $this->office->name)
            ->line('This office is now on-line.')
            ->action('Show your office', url('/'))
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
            'message' => 'We have valided you office: ' . $this->office->name,
        ];
    }
}
