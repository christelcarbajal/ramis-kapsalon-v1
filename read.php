<?php

//$users db


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rami's Kapsalon</title>
    <link   rel="stylesheet" href="css/stylesheet.css">
</head>

<body>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Email</th>
        <th>Datum</th>
        <th>Tijd</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($users as $user) { ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['firstname'] ?></td>
            <td><?= $user['lastname'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['date'] ?></td>
            <td><?= $user['time'] ?></td>
            <td><a href="edit.php?id=<?= $user['id'] ?>">Wijzig</a></td>
            <td><a href="delete.php?id=<?= $user['id'] ?>">Verwijder</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<a class="user-login" href="appointment.php">Nog een afspraak inplannen?</a>
</body>
</html>

