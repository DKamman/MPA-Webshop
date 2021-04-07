<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'cart',
        'user_id'
    ];
    /**
    * Get the order products for the order.
    */
    // public function orderProducts()
    // {
    //     return $this->hasMany(OrderProduct::class);
    // }
}