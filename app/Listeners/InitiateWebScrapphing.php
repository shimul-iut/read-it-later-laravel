<?php

namespace App\Listeners;

use App\Jobs\WebCrawler;
use App\Events\NewContentURLAdded;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class InitiateWebScrapphing
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
     * @param  NewContentURLAdded  $event
     * @return void
     */
    public function handle(NewContentURLAdded $event)
    {
        $contentID = $event->contentID;
        dispatch(new WebCrawler($contentID));

    }
}
