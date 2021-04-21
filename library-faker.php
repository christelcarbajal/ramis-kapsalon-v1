<?php

//Undefined variable
/** @var $db */

//Database required
require_once 'includes/database.php';

//Require faker (library)
require_once "../Faker/src/autoload.php";
require_once "../Faker/src/Faker/Provider/Base.php";

//Generate faker data
$faker = Faker\Factory::create();

for ($i=0; $i<5; $i++){
    $query = "INSERT INTO reservations (firstname, lastname, email, phone, date, time) 
                VALUES('$faker->firstName', '$faker->lastName', '$faker->safeEmail', '$faker->phoneNumber', '$faker->date', '$faker->time')";
    $result = mysqli_query($db, $query);
    echo $query . "<br>";
}

