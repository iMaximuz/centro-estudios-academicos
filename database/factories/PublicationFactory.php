<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Publication::class, function (Faker $faker) {
    return [
        'user_id' => User::inRandomOrder()->get()[0]->id,
        'title' => substr($faker->paragraph, 0, 50),
        'message' => substr($faker->paragraph, 0, 500),
        'publication_type' => 0, // secret
        'uploaded_file_id' => 0,
    ];
});
