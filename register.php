<?php

//Start session
session_start();

//Database required
require_once "includes/database.php";

//Undefined variable
/** @var $db
 * @var $username*/


if (isset($_POST['submit'])) {
    // Postback the data showed to the user
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = $_POST['password'];

    $errors = [];
    if ($username == '') {
        $errors['username'] = 'De gebruikersnaam mag niet leeg zijn.';
    }
    if ($password == '') {
        $errors['password'] = 'Het wachtwoord mag niet leeg zijn.';
    }

    if (empty($errors)) {
        $password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO admin (username, password) VALUES('$username', '$password')";
        $result = mysqli_query($db, $query)
        or die('Error: ' . $query);

        if ($result) {
            header('Location: login.php');
            exit;
        } else {
            $errors[] = 'Er is iets fout gegaan met de database. ' . mysqli_error($db);
        }

        // Close db connection
        mysqli_close($db);
    }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Rami's Kapsalon</title>
    <link   rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
<header></header>
<nav>
    <a href="home.php"><div>Home</div></a>
    <a href="appointment.php"><div>Afspraak</div></a>
    <a href="prices.php"><div>Tarieven</div></a>
    <a href="contact.php"><div>Contact</div></a>
    <a href="login.php"><div>Login</div></a>
</nav>
<main>
    <section>
        <div class="user-create">
        <h1>Aanmelden</h1>
        <form action="" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div>
                <label for="password">Wachtwoord:</label>
                <input type="password" id="password" name="password" placeholder="Wachtwoord" required>
            </div>
            <div>
                <input type="submit" name="submit" value="Submit"/>
            </div>
        </form>
        </div>
    </section>
</main>
<footer>
    <a href="#">Twitter</a> | <a href="https://www.instagram.com/ramiskapsalon/?hl=nl">Instagram</a> | <a href="https://www.facebook.com/ramiskapsalon/">Facebook</a>
</footer>
</body>
</html>