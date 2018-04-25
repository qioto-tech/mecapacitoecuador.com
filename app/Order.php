<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
	protected $table = 'orders';
	protected $fillable = ['code','commerce_id','customer_id','order_description','order_amount','order_id','response_url','state','pay_type','document_number','document_path'];
}
