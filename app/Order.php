<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable =
    [
        'billing_email',
        'billing_name',
        'description_project',
        'billing_phone',
        'billing_subtotal',
        'billing_tax',
        'billing_total',
        'payment_gateway',
        'error'
    ];
}
