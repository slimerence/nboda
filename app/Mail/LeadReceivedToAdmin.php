<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Lead;
use App\Models\Configuration;
use Log;

class LeadReceivedToAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $lead;
    public $siteConfig;

    /**
     * LeadReceivedToCustomer constructor.
     * @param Lead $lead
     * @param Configuration $configuration
     */
    public function __construct(Lead $lead, Configuration $configuration)
    {
        $this->lead = $lead;
        $this->siteConfig = $configuration;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Newboda Clean: you got a new lead from the website!')
            ->markdown('emails.leads.received.to_admin');
    }
}
