<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,

        'detail' => $faker->paragraph,

        'price' => $faker-> numberBetween(100,5000),
        
        'stock' => $faker-> numberBetween(1,1000),
    ];
});
