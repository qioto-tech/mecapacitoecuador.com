<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = 'news';
    protected $fillable = ['title','abstract','summary','url','type','date_input','date_publication','date_end','state'];
}
