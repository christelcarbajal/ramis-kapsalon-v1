<?php
//Start session
session_start();

//Check if admin is logged in, otherwise move back to Login-page
if (!isset($_SESSION['loggedInUser'])) {
    header("Location: login.php");
    exit;
}

//Undefined variables
/** @var $db */
/** @var $users */

//Database required
require_once "includes/database.php";

// If submit-button was pressed..
if (isset($_POST['submit'])) {

//Retrieve data and post back to user
    $users = mysqli_escape_string($db, $_POST['id']);
    $firstname = mysqli_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_escape_string($db, $_POST['lastname']);
    $email = mysqli_escape_string($db, $_POST['email']);
    $phone = mysqli_escape_string($db, $_POST['phone']);
    $date = mysqli_escape_string($db, $_POST['date']);
    $time = mysqli_escape_string($db, $_POST['time']);

    //Validation form required
    require_once "includes/validation-form.php";

    $usersArray = [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'phone' => $phone,
            'date' => $date,
            'time' => $time
    ];

    //If there are no errors..
    if (empty($errors)) {

        //save edited data in database
        $query = "UPDATE reservations  SET firstname = '$firstname', lastname = '$lastname',
        email = '$email', phone = '$phone', date = '$date', time ='$time'  WHERE id = '$users'";
        $result = mysqli_query($db, $query);

        if ($result) {
            header('Location: read.php');
            exit;

        } else {
            $errors[] = 'Er is een fout opgetreden met het opslaan van de gegevens in de database: ' . mysqli_error($db);
        }
    }

}else if (isset($_GET['id'])) {

    //Get parameter from SUPER GLOBAL $_GET
    $users = $_GET['id'];

    //Get data from database ..
    $query = "SELECT * FROM reservations WHERE id = " . mysqli_escape_string($db, $users);
    $result = mysqli_query($db, $query);

    if (mysqli_num_rows($result) == 1) {
        $admin = mysqli_fetch_assoc($result);

    } else {

        //redirects to read page when database returns no data
        header('Location: read.php');
        exit;
    }
    } else {
        header('Location: read.php');
        exit;
    }

// Close db connection
mysqli_close($db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rami's Afspraken</title>
        <link   rel="stylesheet" href="css/reservationlist.css">
</head>
<body>
<header></header>
<nav></nav>
<main></main>
<section>
    <div class="wijziging">
<h1>Wijzig afspraak</h1>
<form action="" method="post">
    <div>
        <label for="firstname">Voornaam:</label>
        <input id="firstname" type="text" name="firstname" value="<?= htmlentities($admin['firstname']) ?>"/>
        <span class="errors"><?= isset($errors['firstname']) ? $errors['firstname'] : '' ?></span>
    </div>
    <div>
        <label for="lastname">Achternaam:</label>
        <input id="lastname" type="text" name="lastname" value="<?= htmlentities($admin['lastname']) ?>"/>
        <span class="errors"><?= isset($errors['lastname']) ? $errors['lastname'] : '' ?></span>
    </div>
    <div>
        <label for="email">E-mailadres:</label>
        <input id="email" type="text" name="email" value="<?= htmlentities($admin['email']) ?>"/>
        <span class="errors"><?= isset($errors['email']) ? $errors['email'] : '' ?></span>
    </div>
    <div>
        <label for="phone">Telefoon:</label>
        <input id="phone" type="text" name="phone" value="<?= htmlentities($admin['phone']) ?>"/>
        <span class="errors"><?= isset($errors['phone']) ? $errors['phone'] : '' ?></span>
    </div>

    <div>
        <label for="date">Datum</label>
        <input id="date" type="text" name="date" value="<?= htmlentities($admin['date']) ?>"/>
        <span class="errors"><?= isset($errors['date']) ? $errors['date'] : '' ?></span>
    </div>

    <div>
        <label for="time">Tijd:</label>
        <input id="time" type="text" name="time" value="<?= htmlentities($admin['time']) ?>"/>
        <span class="errors"><?= isset($errors['time']) ? $errors['time'] : '' ?></span>
    </div>
    <div>
        <input type="hidden" name="id" value="<?=$admin['id']?>"/>
        <input type="submit" name="submit" value="Opslaan"/>
    </div>
</form>
    </div>
    <a href="read.php"><button type="button">Terug</button></a><br><br>
</section>
</body>
</html>
