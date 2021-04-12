<?php

/**
 * @var $username
 * @var $db
 */

require_once "includes/database.php";

// If form is posted, validate it
if (isset($_POST['submit'])) {
    // Retrieve posted data
    $username = $_POST['username'];
    $password = $_POST['pwd'];

    // Get username and password from db
    $query = "SELECT * FROM admin WHERE username = '$username'";
    $result = mysqli_query($db, $query) or die('Error: ' . $query);
    $users = mysqli_fetch_assoc($result);
    

    // Check if username exists in database
    $errors = [];
    if ($username) {
//        print_r('Test');

        //Password validation
        if ($password == $users['password']) {


            // Redirect to read page
            header("Location: /hrfiles/CLE2-project-ramie/read.php");
            exit;

        } else {
            $errors[] = 'Je logingegevens zijn onjuist';
        }
    } else {
        $errors[] = 'Je logingegevens zijn onjuist';
    }
}
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
        <div class="user-login">
        <h1>Inloggen</h1>


            <form method="post" id="login" action="" >


            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="<?= isset ($username) ? htmlentities($username) : '' ?>"/>
                <span class="errors"><?= isset($errors['username']) ? $errors['username'] : '' ?></span>
            </div>

                <div>
                    <label for="pwd">Wachtwoord:</label>
                    <input type="password" id="pwd" name="pwd" value="<?= isset ($password) ? htmlentities($password) : '' ?>"/>
                    <span class="errors"><?= isset($errors['pwd']) ? $errors['pwd'] : '' ?></span>
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