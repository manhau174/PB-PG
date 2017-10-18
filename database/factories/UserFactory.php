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
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'permission' => $faker->biasedNumberBetween($min=1,$max=3),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Company::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->address,
        'about' => $faker->text(),
        'rate'  => $faker->biasedNumberBetween($min = 1, $max =5),
        'user_id' => $faker->biasedNumberBetween($min = 1,$max = 10),
        'mobile' => $faker->tollFreePhoneNumber(),
    ];
});

$factory->define(App\Job::class, function (Faker $faker) {

    return [
        'title' => $faker->text(),
        'description' => $faker->text(),
        'address' => $faker->address,
        'salary' => $faker->numberBetween($min = 500000, $max = 5000000),
        'time'  => $faker->dateTime($max ='now'),
        'company_id' => $faker->biasedNumberBetween($min = 1,$max = 10),
    ];
});

$factory->define(App\Hire::class, function (Faker $faker) {

    return [
        'pb_pg_id' => $faker->biasedNumberBetween($min = 1, $max = 10),
        'job_id' => $faker->biasedNumberBetween($min = 1, $max = 10),
    ];
});

$factory->define(App\PbPg::class, function (Faker $faker) {

    return [
        'full_name' => $faker->firstNameMale(),
        'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'address' => $faker->address,
        'email' => $faker->unique()->safeEmail,
        'mobile' => $faker->tollFreePhoneNumber(),
        'description' => $faker->text(),
        'profile_picture' => $faker->imageUrl($width = 640, $height = 480),
        'images' => $faker->imageUrl($width, $height, 'cats', true, 'Faker'),
        'height' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 160, $max = 200),
        'weight' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 50, $max = 70),
        'user_id' => $faker->biasedNumberBetween($min = 1 , $max = 10),
        'gender'=>$faker->biasedNumberBetween($min=0,$max=1),
    ];
});

