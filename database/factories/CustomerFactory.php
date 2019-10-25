<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->word(),
        'email' => 'kzt@gmail.com',
        'password' => '123456',
        'phone_no' => $faker->paragraph(),
        'address' => $faker->paragraph()
    ];
});
