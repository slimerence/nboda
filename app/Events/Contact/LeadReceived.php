<?php

namespace App\Events\Contact;

use App\Models\Configuration;
use App\Models\Lead;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class LeadReceived
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $lead;
    public $siteConfig;

    /**
     * LeadReceived constructor.
     * @param Lead $lead
     * @param Configuration $configuration
     */
    public function __construct(Lead $lead, Configuration $configuration)
    {
        $this->lead = $lead;
        $this->siteConfig = $configuration;
    }

    /**
     * Get the channels the event should broadcast on.
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return false;
//        return new PrivateChannel('channel-name');
    }
}
