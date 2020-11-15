<?php

use Faker\Generator as Faker;

$factory->define(App\assitance::class, function (Faker $faker) {
    return [
        'student_id' => \App\User::all()->random()->id, //tenemos que crear  funcion para controlar que sea alumno
        'date' => $faker->date,
        'assistance' => $faker->paragraph,
    ];
});
