<?php
$firstname = $_POST ['firstname'];
$middlename = empty($_POST['middlename']) ? '' :  $_POST['middlename'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$time = $_POST['time'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservering Geslaagd</title>
    <link rel="stylesheet" href="css/bevestiging-stylesheet.css">
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
            <a href="home.php"><div id="submit"><input type="submit" name="back" value="Back"/></div></a>
        </div>
    </div>
</div>
</body>
</html>