<?php

use Faker\Generator as Faker;

$factory->define(App\task_done::class, function (Faker $faker) {
    return [
        'student_id'=>  \App\study::all()->random()->id,
        'task_id'=> \App\task::all()->random()->id,
        'mark'=> $faker->random_int,
    ];
});
