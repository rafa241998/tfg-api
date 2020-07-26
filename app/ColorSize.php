<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColorSize extends Model
{
    protected $fillable = [
        'product_color_id', 'size_id','quantity',
    ];

    public function size() {
        return $this->belongsTo('App\Size');
    }
    public function productColor() {
        return $this->belongsTo('App\ProductColor');
    }
    public function cartItems() {
        return $this->hasMany('App\CartItem');
    }
    public function orderItems() {
        return $this->hasMany('App\OrderItem');
    }
}
