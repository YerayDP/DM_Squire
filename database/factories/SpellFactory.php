<?php

use Faker\Generator as Faker;

$factory->define(App\Spell::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence, 
        'description' => $faker->paragraph,
    ];
});
