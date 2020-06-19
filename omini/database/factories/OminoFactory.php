<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Omino;
use Faker\Generator as Faker;

$factory->define(Omino::class, function (Faker $faker) {
    return [
      "firstname"   => $faker-> firstName(),
      "lastname"    => $faker-> lastName(),
      "address"     => $faker-> streetAddress(),
      "code"        => $faker-> postcode(),
      "state"       => $faker-> state(),
      "phonenumber" => $faker-> phoneNumber(),
      "role"        => $faker-> jobTitle(),

    ];
});
