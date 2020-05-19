<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tweef;
use Faker\Generator as Faker;

$factory->define(Tweef::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'body' => $faker->sentence
    ];
});
