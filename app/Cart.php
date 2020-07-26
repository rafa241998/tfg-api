<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
    public function cartItems() {
        return $this->hasMany('App\CartItem');
    }
}
