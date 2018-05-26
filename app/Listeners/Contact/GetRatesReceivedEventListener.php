<?php

namespace App\Listeners\Contact;

use Carbon\Carbon;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Jobs\Email\Send\GetRatesReceived;

class GetRatesReceivedEventListener
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
     * @param  GetRatesReceived  $event
     * @return void
     */
    public function handle(GetRatesReceived $event)
    {
        $job = new GetRatesReceived($event->service);
        $job->delay(Carbon::now()->addSecond());
        dispatch($job);
    }
}
