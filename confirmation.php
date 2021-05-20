<?php

//Database required
require_once "includes/database.php";

//Variables
$firstname = $_GET ['firstname'];
$middlename = empty($_GET['middlename']) ? '' :  $_GET['middlename'];
$lastname = $_GET['lastname'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$date = $_GET['date'];
$time = $_GET['time'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservering Geslaagd</title>
    <link rel="stylesheet" href="css/confirmation-page.css">
</head>
<body>
<div class="container">
    <img src="images/r-kapsalon-picture.jpg" alt="backgroundImage" width="960" height="720">
    <div class="text-block">
        <h2>Reservering Geslaagd!</h2>
        <div>
            <p>
                Voornaam:&nbsp; <?= $firstname ?><br>
                <?= !empty($middlename)? 'Tussenvoegsel: '.$middlename.'<br/>' : '' ?>
                Achternaam:&nbsp; <?= $lastname ?>
                <br>
                E-mail:&nbsp; <?= $email ?>
                <br>
                Telefoon:&nbsp; <?= $phone ?>
                <br>
                Datum:&nbsp; <?= $date ?>
                <br>
                Tijd:&nbsp; <?= $time ?>
            </p>
            <a href="index.php"><div id="submit"><input type="submit" name="back" value="Back"/></div></a>
        </div>
    </div>
</div>
</body>
</html>