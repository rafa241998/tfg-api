<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'color','hex'
    ];

    public function productColors() {
        return $this->hasMany('App\ProductColors');
    }
}
