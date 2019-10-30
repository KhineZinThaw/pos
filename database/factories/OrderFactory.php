<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'code' =>23,
        'quality' => $faker->word(),
        'total' => '5000',
        'customer_id' => function() {
            return factory('App\Customer')->create()->id;
        },
        'item_id' => function() {
            return factory('App\item')->create()->id;
        }
    ];
});
