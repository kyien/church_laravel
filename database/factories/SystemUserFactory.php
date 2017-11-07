<?php

use Faker\Generator as Faker;
use App\User;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\SystemUser::class, function (Faker $faker) {
    static $password;
    $users_id= User::all()->pluck('id')->toArray();
    $users_mail= User::all()->pluck('email')->toArray();
    return [

        'role' => $faker->randomElement(['SuperAdmin','Chair','Secretary','Accountant']),
        'username' => $faker->randomElement([
            'oberlo09','essex19','unai67','uber2015','koulibaly16','sarri_foot',
            'bielsa39','zeKimmich','siska18','blonde 007'
        ]),
        'user_id' =>$faker->randomElement($users_id),
        'password' => $password ?: $password = bcrypt('secret123'),
    ];
});
