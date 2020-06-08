<?php

namespace Modules\Site\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendOrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // dd($this->order);
        // dd($order);
        return $this->subject('Đặt hàng thành công, đơn hàng '.$this->order->order_code)->view('site::site.order_mail')->with(['order'=>$this->order]);
    }
}
