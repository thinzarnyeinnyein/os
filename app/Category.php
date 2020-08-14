<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $fillable = [
        'name', 'photo', 
    ];

    public function subcategory($value='')
    {
    	return $this->hasMany('App\Subcategory');

    }
}
