<?php

namespace App;

use App\Events\OrderSaved;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = ['customers_id', 'products_id', 'variants_id', 'quantity', 'payment_method', 'amount'];
    
    /**
     * The event map for the model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'saved' => OrderSaved::class,
    ];
}
