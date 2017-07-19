<?php

namespace Tests\Unit;

use App\City;
use App\Order;
use App\Product;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PivotModelIsNotInstantiableTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function pivot_model_is_not_instantiable()
    {
        $city = City::create(['name' => 'Amsterdam']);
        $product = Product::create(['name' => 'Burger']);
        $city->products()->attach($product->id);

        $cityProduct = $city->products()->first()->pivot;

        $order = Order::create(['city_product_id' => $cityProduct->id]);

        $this->assertEquals($cityProduct->id, $order->cityProduct->id);
    }
}
