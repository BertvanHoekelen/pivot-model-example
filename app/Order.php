<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function cityProduct()
    {
        return $this->belongsTo(CityProduct::class);
    }
}
