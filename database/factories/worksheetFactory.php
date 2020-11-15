<?php

use Faker\Generator as Faker;

$factory->define(App\worksheet::class, function (Faker $faker) {
    return [
        'date' => $faker->date,
        'description' => $faker->paragraph,
        'student_id' => \App\enterprise::all()->ramdon()->id,
    ];
});
