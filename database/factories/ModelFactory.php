<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'login' => $faker->unique()->userName,
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'role' => $faker->randomElement($array = array ('admin','user')),
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10)
    ];
});

$factory->define(App\Reservation::class, function (Faker\Generator $faker) {
    static $timezone;
    static $begin;
    $timezone = date_default_timezone_get();
    $begin = $faker->dateTimeBetween(
        $startDate = '-3 days',
        $endDate = '+30 days',
        $timezone);

    return [
        'name' => $faker->sentence(
            $maxNbWords = 5,
            $variableNbWords = true),
        'begin' => $begin,
        'end' => $faker->dateTimeBetween(
            $startDate = $begin,
            $endDate = '+60 days',
            $timezone)
    ];
});
