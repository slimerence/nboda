<?php

namespace App\Mail;

use App\Models\Configuration;
use App\Models\Lead;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class LeadReceivedToCustomer extends Mailable
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
        Log::info('sending email',['a'=>'b']);
        return $this->subject('Newboda Clean: thank you for contacting with us!')
            ->markdown('emails.leads.received.to_customer');
    }
}
