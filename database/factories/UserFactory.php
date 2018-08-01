<?php

use Faker\Generator as Faker;

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => 'Admin Rohan ',
        'first_name' => 'Admin',
        'last_name' => 'Rohan',
        'email' => 'admin@gmail.com',
        'user_type' => 1,
        'has_accepted_policy'=>1,
        'password' => bcrypt('secret'), // secret
        'remember_token' => str_random(10),
    ];
});
