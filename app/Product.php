<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //Sistema di protezione
    protected $fillable = ['title','body', 'cover'];
}
