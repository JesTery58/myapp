<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategoriler extends Model
{
    /**
     * @var array

     */


    protected $guarded = ['id'];

    public function parent()
    {
        return $this->belongsTo('App\Category', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Category', 'parent_id')->with('orders');
    }
}
