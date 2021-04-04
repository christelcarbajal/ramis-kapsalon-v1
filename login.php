<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rami's Kapsalon</title>
    <link   rel="stylesheet" href="css/stylesheet.css">
</head>

<header></header>
<body>

<nav>
    <a href="home.php"><div>Home</div></a>
    <a href="appointment.php"><div>Afspraak</div></a>
    <a href="prices.php"><div>Tarieven</div></a>
    <a href="contact.php"><div>Contact</div></a>
    <a href="login.php"><div>Login</div></a>
</nav>

<main>
    <section>
        <div class="user-login">
        <h1>Inloggen</h1>


            <form method="post" id="login" action="" >
            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="<?= isset ($username) ? htmlentities($username) : '' ?>"/>
                <span class="errors"><?= isset($errors['username']) ? $errors['username'] : '' ?></span>
            </div>
            <div>
                <label for="wachtwoord">Password:</label>
                <input type="password" id="password" name="password" value="<?= isset ($password) ? htmlentities($password) : '' ?>"/>
                <span class="errors"><?= isset($errors['password']) ? $errors['password'] : '' ?></span>
            </div>
            <div>
                <input type="submit" name="submit" value="Inloggen"/>
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