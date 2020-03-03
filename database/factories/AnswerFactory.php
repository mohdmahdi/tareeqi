<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Answer;
use Faker\Generator as Faker;

$factory->define(Answer::class, function (Faker $faker) {
    return [
        'Answer'        => $faker->numberBetween(1,5),
        'quiz_id'        => $faker->numberBetween(1,100),
        'question_id'        => $faker->numberBetween(1,80),

    ];
});
