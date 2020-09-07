<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id','title','description','price','image',
    ];

    public function category() {
        return $this->belongsTo('App\Category');
    }
    public function productColors() {
        return $this->hasMany('App\ProductColor');
    }
    public function favorites() {
        return $this->hasMany('App\Favorite');
    }

}
