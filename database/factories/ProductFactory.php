<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(Product::class, function (Faker $faker) {
    $array = [1, 2, 3, 4, 5,6,7,8,9];
    $random = Arr::random($array);

    switch($random){
        case 1: $randomText = "can";break;
        case 2: $randomText = "clothes,shoes";break;
        case 3: $randomText = "blanket";break;
        case 4: $randomText = "furniture";break;
        case 5: $randomText = "household appliance";break;
        case 6: $randomText = "hygiene";break;
        case 7: $randomText = "toys";break;
        case 8: $randomText = "medicines";break;
        case 9: $randomText = "Things";break;
    }
    return [
        'name' => $faker->text(15),
        'description' => $faker->paragraph,
        'image' => 'https://loremflickr.com/320/240/'.$randomText.'?random='.$faker->numberBetween(0,500),
        'category_id' => $random,
    ];
});
