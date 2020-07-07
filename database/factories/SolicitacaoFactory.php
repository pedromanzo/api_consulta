<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Solicitacao::class, function (Faker $faker) {
    return [
        'nome_condutor'=>$faker->nome_condutor,
        'sexo'=>$faker->sexo,
        'data_nascimento'=>$faker->data_nascimento,
        'marca'=>$faker->marca,
        'veiculo'=>$faker->veiculo


    ];
});
