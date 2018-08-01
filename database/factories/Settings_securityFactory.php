<?php

use Faker\Generator as Faker;

$factory->define(App\Settings_security::class, function (Faker $faker) {
    return [
        //
        'email' => 'admin@gmail.com',
        'question' => 'What is the name of your favorite pet?',
        'answer' => 'dog',
        
    ];
});
