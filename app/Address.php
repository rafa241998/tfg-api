<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','line1','line2', 'postal_code', 'city','country','phone_number',
    ];
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function orders() {
        return $this->hasMany('App\Order');
    }
}
