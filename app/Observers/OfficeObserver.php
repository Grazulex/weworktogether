<?php

namespace App\Observers;

use App\Enums\StatusEnum;
use App\Models\Office;
use App\Notifications\OfficesValidedNotification;
use Notification;

class OfficeObserver
{
    /**
     * Handle the Office "created" event.
     *
     * @param  \App\Models\Office  $office
     * @return void
     */
    public function creating(Office $office)
    {
        $office->user()->associate(auth()->user());
    }

    /**
     * Handle the Office "updated" event.
     *
     * @param  \App\Models\Office  $office
     * @return void
     */
    public function updated(Office $office)
    {
        if (
            $office->wasChanged('status') &&
            $office->status === StatusEnum::OPEN
        ) {
            Notification::send(
                $office->user,
                new OfficesValidedNotification('Validation', $office->name)
            );
        }
    }

    /**
     * Handle the Office "deleted" event.
     *
     * @param  \App\Models\Office  $office
     * @return void
     */
    public function deleted(Office $office)
    {
        //
    }

    /**
     * Handle the Office "restored" event.
     *
     * @param  \App\Models\Office  $office
     * @return void
     */
    public function restored(Office $office)
    {
        //
    }

    /**
     * Handle the Office "force deleted" event.
     *
     * @param  \App\Models\Office  $office
     * @return void
     */
    public function forceDeleted(Office $office)
    {
        //
    }
}
