<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Section;
use Faker\Generator as Faker;

$factory->define(Section::class, function (Faker $faker) {
    return [
        'name'        => $faker->randomElement(['Logical','Language','musical' ,'sport', 'natural', 'visual','social','psychological']),
    ];
});
