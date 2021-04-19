<?php

//Start session
session_start();

//Check if admin is logged in, otherwise move back to Login-page
if (!isset($_SESSION['loggedInUser'])) {
    header("Location: login.php");
    exit;
}

//Fix undefined variable
/** @var $db */

//Database required
require_once "includes/database.php";

//If submit-button was pressed..
if (isset($_POST['submit'])) {

    //delete data from db
    $query = "DELETE FROM reservations WHERE id = " . mysqli_escape_string($db, $_POST['id']);
    mysqli_query($db, $query) or die ('Error: ' . mysqli_error($db));

    //Close the db connection
    mysqli_close($db);

    //After deletion redirect to read page
    header("Location: read.php");

} else if (isset($_GET['id'])) {

    //Get parameter from SUPER GLOBAL $_GET
    $userId = $_GET['id'];

    //Get data from database
    $query = "SELECT * FROM reservations WHERE id = " . mysqli_escape_string($db, $userId);
    $result = mysqli_query($db, $query) or die ('Error: ' . $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

    } else {

        // Redirect to read page when database returns with no results
        header('Location: read.php');
        exit;
    }
} else {
    // Execute if id was not present in the url / if form was not submitted
    header('Location: read.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rami's Kapsalon - Delete pagina</title>
    <link rel="stylesheet" href="css/reservationlist.css">
</head>
<body>
<header></header>
<nav></nav>
<main></main>
<section>
    <h1>Verwijder Afspraak</h1>
    <form action="" method="post">
    <p>
        Weet u zeker dat u de user
        <?= $user['firstname']?>
        <?= $user['lastname']?> op
        <?= $user['date']?>" wilt verwijderen?
    </p>
    <input type="hidden" name="id" value="<?= $user['id'] ?>"/>
    <input type="submit" name="submit" value="Verwijderen"/>
        <a href="read.php"><button type="button">Terug</button></a><br><br>
    </form>
</section>
</body>
</html>
