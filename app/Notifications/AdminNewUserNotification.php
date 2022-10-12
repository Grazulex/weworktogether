<?php

namespace App\Notifications;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use RalphJSmit\Filament\Notifications\Concerns\StoresNotificationInDatabase;
use RalphJSmit\Filament\Notifications\Contracts\AsFilamentNotification;
use RalphJSmit\Filament\Notifications\FilamentNotification;

class AdminNewUserNotification extends Notification implements AsFilamentNotification, ShouldQueue
{
    use Queueable, StoresNotificationInDatabase;

    public function __construct(
        public string $type,
        public string $userName,
        public string $userEmail,
    ) {
    }

    public function via($notifiable)
    {
        return ['mail', 'database'];
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
            ->description(fn (self $notification) => "New user created '{$notification->userName}' with email '{$notification->userEmail}'");
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('A new user is created'.$this->userName.' with email '.$this->userEmail)
            ->action('Show all the users', url('/'))
            ->line('Thank you for using our application!');
    }
}
