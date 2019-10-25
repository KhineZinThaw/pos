<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'code' =>23,
        'quality' => $faker->word(),
        'total' => '5000',
        'customer_id' => 5
    ];
});
