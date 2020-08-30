<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use Faker\Generator as Faker;

$factory->define(
    Author::class,
    function (Faker $faker) {
        return [
            'name' => $faker->name(5),
            'surname' => $faker->sentence(1),
            'created_at' =>$faker->dateTimeBetween('-3months'),
        ];
    }
);
