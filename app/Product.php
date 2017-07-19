<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function cities()
    {
        return $this->belongsToMany(City::class)->withPivot(['id'])->using(CityProduct::class);
    }
}
