<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'     => $faker -> word(),
        'text'      => $faker -> sentence(10),
        'category'  => $faker -> word(),
        'like'      => $faker -> numberBetween(0, 1000000),
        'dislike'   => $faker -> numberBetween(0, 1000000)

    ];
});
