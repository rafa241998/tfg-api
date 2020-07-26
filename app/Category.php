<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','description','gender','image',
    ];

    public function products() {
        return $this->hasMany('App\Product');
    }
}
