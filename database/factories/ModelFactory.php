<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Score::class, function (Faker\Generator $faker) {
    return [
        'username' => $faker->userName,
        'score' => $faker->randomDigit
    ];
});

$factory->define(App\Repository::class, function (Faker\Generator $faker) {
    return [
        'url' => $faker->url,
        'stars' => $faker->randomDigit,
        'lang' => 'caca',
        'score_id' => \App\Score::inRandomOrder()->first()->id
    ];
});
