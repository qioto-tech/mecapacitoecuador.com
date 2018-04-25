<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Mail\Mailer;
use App\Order;

class Payment_Deposit extends Job 

{
    protected $order;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( $order )
    {

    	$datos = Order::join('persons', 'orders.customer_id','=','persons.id')
    	->join('products', 'orders.product_id','=','products.id')
    	->where('orders.id',$order)
    	->select('products.name as pname','orders.product_description','orders.id', 'orders.password_ne','persons.customer_ci', 'persons.customer_name','persons.customer_lastname','persons.customer_email','products.code as pcode')
    	->get();

    	$this->order = $datos[0];
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    
    public function handle(Mailer $mailer)
    {
        $data = [
            'title'  => "Pago Pendiente de Registro",
            'nombrede'  => "Capacitate Ecuador",
            'orden'   => $this->order->id,
        	'email'   => $this->order->customer_email,
        	'nombre'   => strtoupper($this->order->customer_name),
        	'apellido'   => strtoupper($this->order->customer_lastname),
        	'code'   => $this->order->pcode,
        ];
        
        $mailer->send('paymentEmail', $data, function($message) {
            $message->to($this->order->customer_email)
            ->subject(utf8_encode("Solicitud de Inscripción a la prueba de " . $this->order->pname));
        });
    }
    
}
