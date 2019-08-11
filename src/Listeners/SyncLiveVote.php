<?php

namespace Partymeister\Competitions\Listeners;

use Partymeister\Competitions\Events\LiveVoteUpdated;
use Partymeister\Core\Events\EventSaved;

/**
 * Class SyncLiveVote
 * @package Partymeister\Competitions\Listeners
 */
class SyncLiveVote
{

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    /**
     * Handle the event.
     *
     * @param LiveVoteUpdated $event
     */
    public function handle(LiveVoteUpdated $event)
    {
        \Partymeister\Competitions\Jobs\SyncLiveVote::dispatch($event->liveVote);
    }
}
