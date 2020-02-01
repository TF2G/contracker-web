<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    $steamid64 = '76561198';
    while (strlen($steamid64) < 17) {
        $steamid64 .= $faker->randomDigit;
    }
    return [
        'username' => $faker->unique()->userName,
        'avatar' => $faker->imageUrl(184, 184),
        'steamid' => $steamid64,
        'remember_token' => Str::random(10),
    ];
});
