<?php

namespace App\Jobs\Email\Send;

use App\Mail\ServiceReceivedToAdmin;
use App\Models\Service;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Models\Configuration;
use Log;
use Mail;

class GetRatesReceived implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $service;
    public $siteConfig;

    /**
     * GetRatesReceived constructor.
     * @param Service $service
     * @param Configuration $configuration
     */
    public function __construct(Service $service,Configuration $configuration)
    {
        $this->service = $service;
        $this->siteConfig = $configuration;
    }

    /**
     *
     */
    public function handle()
    {
        if($this->service){
            Mail::to($this->siteConfig->contact_email)
                ->send(new ServiceReceivedToAdmin($this->service,$this->siteConfig));
        }
    }
}
