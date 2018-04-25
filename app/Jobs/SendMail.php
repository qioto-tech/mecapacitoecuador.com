<?php

namespace App\Jobs;

use App\Jobs\Job;

use Request;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Mail\Mailer;

class SendMail extends Job implements SelfHandling
{

    /**
     * User Model.
     *
     * @var App\Models\User
     */
    protected $user;

    /**
     * Create a new SendMailCommand instance.
     *
     * @param  App\Models\User  $user
     * @return void
     */
    public function __construct()
    {
      
    }

    /**
     * Execute the job.
     *
     * @param  Mailer  $mailer
     * @return void
     */
    public function handle(Mailer $mailer)
    {
        $data = [
            'title'  => "Capacitate Ecuador",
            'intro'  => "Credenciales"
            
        ];
        
        $mailer->send('emails.auth.verify', $data, function($message) {
            $message->to($this->user->email, $this->user->username)
                    ->getHeaders()->addTextHeader('x-mailgun-native-send', true)
                    ->subject(trans('front/verify.email-title'));
        });
    }
}
