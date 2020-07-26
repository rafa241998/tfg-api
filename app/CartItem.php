<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cart_id','color_size_id','quantity','price',
    ];

    public function cart() {
        return $this->belongsTo('App\Cart','cart_id');
    }
    public function colorSize() {
        return $this->belongsTo('App\ColorSize');
    }
}
