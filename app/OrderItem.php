<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id','color_size_id','quantity','price',
    ];

    public function order() {
        return $this->belongsTo('App\Order');
    }
    public function colorSize() {
        return $this->belongsTo('App\ColorSize');
    }
}
