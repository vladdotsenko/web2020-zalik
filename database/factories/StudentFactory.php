<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [

        'fio'=>$faker->name,
        'group'=>$faker->text,
        'curse'=>$faker->numberBetween(1,4),
    ];
});
