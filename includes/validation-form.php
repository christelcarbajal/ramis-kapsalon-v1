<?php

// Fix undefined variables
/** @var $firstname  */
/** @var $lastname  */
/** @var $email */
/** @var $phone  */
/** @var $date  */
/** @var $time  */

$errors = [];
if ($firstname == "") {
    $errors['firstname'] = '"Voornaam" mag niet leeg zijn.';
}
if ($lastname == "") {
    $errors['lastname'] = '"Achternaam" mag niet leeg zijn.';
}
if ($email == "") {
    $errors['email'] = '"Email" mag niet leeg zijn.';
}
if ($phone == "") {
    $errors['phone'] = '"Telefoon" mag niet leeg zijn.';
}
if ($date == "") {
    $errors['date'] = '"Datum" mag niet leeg zijn.';
}
if ($time == "") {
    $errors['time'] = '"Tijd" mag niet leeg zijn.';
}

?>