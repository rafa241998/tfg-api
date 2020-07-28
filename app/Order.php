<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','address_id','status','subTotal', 'shipping', 'total','details','orderDate',
    ];
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function address() {
        return $this->belongsTo('App\Address');
    }
    public function payments() {
        return $this->hasMany('App\Payment');
    }
    public function orderItems() {
        return $this->hasMany('App\OrderItem');
    }
}
