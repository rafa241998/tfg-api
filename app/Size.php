<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'size',
    ];

    public function ColorSizes() {
        return $this->hasMany('App\ColorSize');
    }
}
