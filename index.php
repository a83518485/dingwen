<?php
require "vendor/autoload.php";

$faker = Faker\Factory::create();

echo nl2br($faker->name."\n");

echo nl2br($faker->city."\n");

echo nl2br($faker->company."\n");