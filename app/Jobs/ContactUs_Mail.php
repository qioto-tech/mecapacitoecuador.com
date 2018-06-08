<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Mail\Mailer;


class ContactUs_Mail extends Job 

{
    protected $mail;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->mail = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    
    public function handle(Mailer $mailer)
    {
        $data = [
            'nombre'  => $this->mail['name'],
            'email'  => $this->mail['email'],
            'asunto'   => $this->mail['subject'],
            'resumen'   => $this->mail['message'],
        ];
        
        $mailer->send('contactUs', $data, function($message) {
            $message->to('info@mecapacitoecuador.com')
            ->subject(utf8_encode($this->mail['subject']));
        });
    }
    
}
