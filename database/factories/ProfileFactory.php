<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'level'=>3,
        'pic' => $faker->imageUrl(200,200),
        'customer_id' => function() { 
            return factory('App\Customer')->create()->id;
        }
    ];
});
