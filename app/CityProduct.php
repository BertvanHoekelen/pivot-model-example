<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CityProduct extends Pivot
{
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
