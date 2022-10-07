<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use RalphJSmit\Filament\Notifications\Concerns\StoresNotificationInDatabase;
use RalphJSmit\Filament\Notifications\Contracts\AsFilamentNotification;
use RalphJSmit\Filament\Notifications\FilamentNotification;

class OfficesFindedNotification extends Notification implements AsFilamentNotification, ShouldQueue
{
    use Queueable, StoresNotificationInDatabase;


    public function __construct(
        public string $type,
        public string $count
    ) {
    }

    public static function toFilamentNotification(): FilamentNotification
    {
        return FilamentNotification::make()
            ->form([
                TextInput::make('type')
                    ->label('Type')
                    ->required()
                    ->columnSpan(2),
                Textarea::make('message')
                    ->label('Message')
                    ->columnSpan(2),
            ])
            ->message(fn (self $notification) => $notification->type)
            ->description(fn (self $notification) => "We have find '{$notification->count}' office(s) for you");
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
}
