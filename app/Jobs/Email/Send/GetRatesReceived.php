<?php

namespace App\Jobs\Email\Send;

use App\Mail\ServiceReceivedToAdmin;
use App\Models\Service;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Log;
use Mail;

class GetRatesReceived implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $service;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if($this->service){
            Mail::to('info@newboda.com')
                ->send(new ServiceReceivedToAdmin($this->service));
        }
    }
}
