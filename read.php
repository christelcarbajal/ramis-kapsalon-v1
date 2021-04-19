<?php
//Start session
session_start();

//Check if admin is logged in, otherwise move back to Login-page
if (!isset($_SESSION['loggedInUser'])) {
    header("Location: login.php");
    exit;
}

/** @var $db */
/** @var $user */

//Database required once
require_once "includes/database.php";

// Get the data from the database
$query = "SELECT * FROM users";
$result = mysqli_query($db, $query) or die ('Error: ' . $query);

//Add information to array
$users = [];
while ($row = mysqli_fetch_assoc($result)) {
    $users[] = $row;
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
    <link rel="stylesheet" href="css/reservationlist.css">
</head>
<body>
<header></header>
<nav></nav>
<main></main>
<section>
        <div class="afspraken">
        <h1>Afspraken</h1>
            <table>
    <thead>
    <tr>
        <div>
        <th>#</th>
        <th>Voornaam:</th>
        <th>Achternaam:</th>
        <th>E-mailadres:</th>
        <th>Telefoon:</th>
        <th>Datum:</th>
        <th>Tijd:</th>
        </div>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user) { ?>
        <tr>
            <td><?= htmlentities($user['id']) ?></td>
            <td><?= htmlentities($user['firstname']) ?></td>
            <td><?= htmlentities($user['lastname']) ?></td>
            <td><?= htmlentities($user['email']) ?></td>
            <td><?= htmlentities($user['phone']) ?></td>
            <td><?= htmlentities($user['date']) ?></td>
            <td><?= htmlentities($user['time']) ?></td>
            <td><a href="edit.php?id=<?=$user['id']?>">Wijzig</a></td>
            <td><a href="delete.php?id=<?=$user['id']?>">Verwijder</a></td>
        </tr>
    <?php } ?>
    </tbody>
            </table>
        </div>
    <a href="logout.php"><button type="button">Uitloggen</button></a><br><br>
</section>
</body>
</html>

