<?php

use Faker\Generator as Faker;
use App\User;
use App\Publication;

$factory->define(App\Comment::class, function (Faker $faker) {

    return [
        'publication_id' => Publication::inRandomOrder()->get()[0]->id,
        'user_id' => User::inRandomOrder()->get()[0]->id,
        'message' => substr($faker->paragraph, 0, 250),
    ];
});
