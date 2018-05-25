<?php

namespace App\Listeners\Contact;

use App\Events\Contact\LeadReceived;
use App\Jobs\Email\Send\ContactFormSubmitted;
use Carbon\Carbon;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class LeadReceivedEventListener
{
    /**
     * 构造函数
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  LeadReceived  $event
     * @return void
     */
    public function handle(LeadReceived $event)
    {
//        Log::info('Lead',['to_admin'=>$event->siteConfig->contact_phone]);
//        Log::info('Lead',['to_user'=>$event->lead->email]);
        $job = new ContactFormSubmitted($event->lead, $event->siteConfig);
        $job->delay(Carbon::now()->addSecond());
        dispatch($job);
    }
}
