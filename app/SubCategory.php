<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //
    protected $table = 'sub_categories';
    public function category()
    {
        return $this->hasOne('App\Category');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

}
