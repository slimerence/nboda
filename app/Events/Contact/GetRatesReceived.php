<?php

namespace App\Events\Contact;

use App\Models\Service;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Models\Configuration;

class GetRatesReceived
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

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
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return false;
//        return new PrivateChannel('channel-name');
    }
}
