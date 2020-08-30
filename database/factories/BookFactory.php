<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(
    Book::class,
    function (Faker $faker) {
        return [
            'title' => $faker->sentence(2),
            'content' => $faker->paragraphs(5, true),
        ];
    }
);

$factory->state(
    App\Book::class,
    'new-title',
    function (Faker $faker) {
        return [
            'name' => 'N title',
            'content' => 'Content of the blog post',
        ];
    }
);
