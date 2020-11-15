<?php

use Faker\Generator as Faker;

$factory->define(App\enterprise::class, function (Faker $faker) {
    return [
        'name'=> $faker->sentence,
        'email' => $faker->unique()->safeEmail,
    ];
});
