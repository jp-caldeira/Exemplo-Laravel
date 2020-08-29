<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\diretores;
use Faker\Generator as Faker;


$factory->define(diretores::class, function (Faker $faker) {
    return [
         "nome" => $faker->name
       ];
});
