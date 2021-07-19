<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    public $testMail = 'Test mail';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $details)
    {   
          $this->$details =  $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        $details = $this->details;
        return $this->subject('Hệ thống đặt vé')->view('emails.TestMail', compact('details'));
    }
}
