<?php

namespace App\Observers;

use App\Enums\StatusEnum;
use App\Models\Search;
use App\Notifications\SearchesValidedNotification;
use Notification;

class SearchObserver
{
    /**
     * Handle the Search "created" event.
     *
     * @param  \App\Models\Search  $search
     * @return void
     */
    public function creating(Search $search)
    {
        $search->user()->associate(auth()->user());
    }

    /**
     * Handle the Search "updated" event.
     *
     * @param  \App\Models\Search  $search
     * @return void
     */
    public function updated(Search $search)
    {
        if (
            $search->wasChanged("status") &&
            $search->status === StatusEnum::OPEN
        ) {
            Notification::send(
                $search->user,
                new SearchesValidedNotification("Validation", $search->name)
            );
        }
    }

    /**
     * Handle the Search "deleted" event.
     *
     * @param  \App\Models\Search  $search
     * @return void
     */
    public function deleted(Search $search)
    {
        //
    }

    /**
     * Handle the Search "restored" event.
     *
     * @param  \App\Models\Search  $search
     * @return void
     */
    public function restored(Search $search)
    {
        //
    }

    /**
     * Handle the Search "force deleted" event.
     *
     * @param  \App\Models\Search  $search
     * @return void
     */
    public function forceDeleted(Search $search)
    {
        //
    }
}
