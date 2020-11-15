<?php

use Faker\Generator as Faker;

$factory->define(App\visit::class, function (Faker $faker) {
    return [
        'tracing_id' => \App\Tracing::all()->ramdon()->id,
        'enterprise_id' =>\App\enterprise::all()->ramdon()->id,
        'date' => $faker->date,
        'kms' => $faker->floatval, //?
    ];
});
