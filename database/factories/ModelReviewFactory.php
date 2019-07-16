<?php

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(App\Model\Review::class, function (Faker $faker) {
    return [

        'product_id' => $faker->numberBetween(1, Product::count()),
        
        'customer' => $faker->name,

        'review' => $faker->paragraph,

        'star' => $faker->numberBetween(0,5),


    ];
});
