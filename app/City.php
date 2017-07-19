<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = [];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot(['id'])->using(CityProduct::class);
    }
}
