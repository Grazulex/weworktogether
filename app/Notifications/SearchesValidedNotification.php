<?php

namespace App\Notifications;

use App\Models\Search;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use RalphJSmit\Filament\Notifications\Concerns\StoresNotificationInDatabase;
use RalphJSmit\Filament\Notifications\Contracts\AsFilamentNotification;
use RalphJSmit\Filament\Notifications\FilamentNotification;

class SearchesValidedNotification extends Notification implements AsFilamentNotification, ShouldQueue
{
    use Queueable, StoresNotificationInDatabase;


    private Search $search;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Search $search)
    {
        $this->search = $search;
    }


    public static function toFilamentNotification(): FilamentNotification
    {
        return FilamentNotification::make()
            ->message(function (self $notification) {
                return "We have valided you search: {$notification->SearchName}.";
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
            ->line('We have valided you search: ' . $this->search->name)
            ->line('This search is now on-line.')
            ->action('Show your search', url('/'))
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
            'SearchName' => $this->search->name,
        ];
    }
}
