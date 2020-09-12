<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\produtos;
use Faker\Generator as Faker;

$factory->define(produtos::class, function (Faker $faker) {
    return [
      "nome" => $faker->bs(20),
      "preco" => $faker->randomFloat(2, 0, 120),
      "tipo_produto" => $faker->word,
      "categoria" => $faker->bs,
      "marca" => $faker->company,
      "imagem" => $faker->image(),
    ];
});
