<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;


    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'carts_items', 'item_id', 'cart_id');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'orders_items', 'order_id', 'item_id');
    }
}
