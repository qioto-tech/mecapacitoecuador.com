<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Support\Facades\DB;

class Mail_Teacher extends Job 

{
    protected $teacher;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( $teacher_id )
    {

    	$datos = DB::table('teachers')
    	->where('id',$teacher_id)
    	->select('ci','name', 'email')
    	->get();
    	
    	
    	$this->teacher= $datos[0];
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    
    public function handle(Mailer $mailer)
    {
        $data = [
            'title'  => "Bienvenido",
            'nombrede'  => "Capacitate Ecuador",
        		'email'   => $this->teacher->email,
        		'nombre'   => strtoupper($this->teacher->name),
        ];
        
        $mailer->send('emailTeacher', $data, function($message) {
        	$message->to($this->teacher->email)
            ->subject(utf8_encode("Bienvenido a Capacitate Ecuador "));
        });
    }
    
}
