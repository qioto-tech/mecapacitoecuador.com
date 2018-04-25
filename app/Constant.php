<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Constant extends Model
{
	protected $table = 'constants';
	protected $fillable = ['code','value','description'];
	//
}
