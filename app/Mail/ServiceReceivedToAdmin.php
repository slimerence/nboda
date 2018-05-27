<?php

namespace App\Mail;

use App\Models\Service;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Log;

class ServiceReceivedToAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $service;
    public $serviceData = [];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->serviceData = json_decode($this->service->content,true);
        Log::info('listen',$this->serviceData);
        return $this->subject('Newboda Clean: You\'ve just got a new service request')
            ->markdown('emails.services.received.to_admin');
    }
}
