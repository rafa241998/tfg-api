<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    protected $fillable = [
        'product_id', 'color_id','image','active',
    ];

    public function color() {
        return $this->belongsTo('App\Color');
    }
    public function product() {
        return $this->belongsTo('App\Product');
    }
    public function colorSizes() {
        return $this->hasMany('App\ColorSize');
    }
}
