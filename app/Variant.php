<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    //
    protected $fillable = ['variant_name', 'price', 'quantity_stock'];
}
