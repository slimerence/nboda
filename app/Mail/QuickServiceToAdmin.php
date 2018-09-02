<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/3
 * Time: 0:33
 */

namespace App\Mail;

use App\Models\QuickService;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuickServiceToAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $quickService;

    public function __construct(QuickService $quickService)
    {
        $this->quickService = $quickService;
    }

    public function build()
    {
        return $this->subject('Newboda Clean: you got a quick form from the website!')
            ->markdown('emails.services.quickadmin');
    }
}