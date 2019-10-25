<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\item;
use Faker\Generator as Faker;

$factory->define(item::class, function (Faker $faker) {
    return [
        'name' => $faker->word(),
        'price' => 1000,
        'size' => '23',
        'description' => $faker->paragraph()
    ];
});
