<?php

/** @var $db */
require_once "includes/database.php";


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

        $query = "INSERT INTO users (username, password) VALUES('$username', '$password')";
        $result = mysqli_query($db, $query)
        or die('Error: ' . $query);

        if ($result) {
            header('Location: homepage.php');
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
    <link   rel="stylesheet" href="css/confirmation-page.css">
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
        <form action="confirmation.php" method="post">
            <div>
                <label for="firstname">Voornaam:</label>
                <input type="text" id="firstname" name="firstname" placeholder="Voornaam" required>
            </div>
            <div>
                <label for="middlename">Tussenvoegsel:</label>
                <input type="text" id="middlename" name="middlename" placeholder="Tussenvoegsel">
            </div>
            <div>
                <label for="lastname">Achternaam:</label>
                <input type="text" id="lastname" name="lastname" placeholder="Achternaam" required>
            </div>
            <div>
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Freshcut@mail.com" required>
            </div>
            <div>
                <label for="phone">Telefoon:</label>
                <input type="text" id="phone" name="phone" placeholder="0612345678" required>
            </div>
            <div>
                <label for="wachtwoord">Wachtwoord:</label>
                <input type="password" id="wachtwoord" name="wachtwoord" placeholder="Wachtwoord" required>
            </div>
            <div>
                <label for="wachtwoord">Bevestig wachtwoord:</label>
                <input type="password" id="wachtwoord1" name="wachtwoord" placeholder="Wachtwoord" required>
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