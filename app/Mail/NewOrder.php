<?php

namespace App\Mail;

use Stripe\PaymentIntent;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewOrder extends Mailable
{
    use Queueable, SerializesModels;

    public $charge;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($charge)
    {
        $this->charge = $charge;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.new-order');
    }
}
