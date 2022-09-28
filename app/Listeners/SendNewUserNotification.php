<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\AdminNewUserNotification;
use Notification;

class SendNewUserNotification
{

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $admins = User::where('is_admin', true)->get();
        Notification::send($admins, new AdminNewUserNotification(type: 'Account', userName: $event->user->name, userEmail: $event->user->email));
    }
}
