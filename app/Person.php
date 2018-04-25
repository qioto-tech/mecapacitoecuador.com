<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
	protected $table = 'persons';
	protected $fillable = ['customer_ci','customer_ci','customer_name','customer_lastname','customer_phone','customer_address','customer_email','customer_language'];
}
