<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id','user_id','code','type', 'status',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
    public function order() {
        return $this->belongsTo('App\Order');
    }
}
