<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	//	
	protected $table = 'products';
	protected $fillable = ['code','name','description','amount','state','promotion','description','legend','id_user','costocurso'];
	
}
