<?php

namespace App\Jobs\Email\Send;

use App\Mail\LeadReceivedToAdmin;
use App\Mail\LeadReceivedToCustomer;
use App\Models\Configuration;
use App\Models\Lead;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class ContactFormSubmitted implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $lead;
    public $siteConfig;

    /**
     * ContactFormSubmitted constructor.
     * @param Lead $lead
     * @param Configuration $configuration
     */
    public function __construct(Lead $lead, Configuration $configuration)
    {
        $this->lead = $lead;
        $this->siteConfig = $configuration;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if($this->lead && $this->siteConfig){
            Mail::to($this->siteConfig->email)
                ->send(new LeadReceivedToAdmin($this->lead, $this->siteConfig));
        }
    }
}
