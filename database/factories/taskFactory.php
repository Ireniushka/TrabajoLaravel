<?php

use Faker\Generator as Faker;

$factory->define(App\task::class, function (Faker $faker) {
    return [
        'number'=> $faker->random_int,
        'description' => $faker->paragraph,
    ];
});
