<?php
 
namespace App\Mail;
 
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
 
class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Credentials array (uncrypted)
     * @var array
     */
    public $data;

    /**
     * Template to use
     * @var string
     */
    public $template;

    /**
     * Subject of the email
     * @var string
     */
    public $subject;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $template, $subject)
    {
        $this->data = $data;
        $this->template = $template;
        $this->subject = $subject;
    }
 
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('hello@challengeforearth.com', 'Challenge For Earth')
                    ->subject($this->subject)
                    ->view($this->template)
                    ->with('data', $this->data);
    }
}