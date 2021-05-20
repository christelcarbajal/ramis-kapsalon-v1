<?php
//Start session
session_start();

//Undefined variables fixed
/** @var $username
 * @var mysqli $db
 */

//Database required
require_once "includes/database.php";


// Check if admin is logged in, otherwise redirects to read page
if (isset($_SESSION['loggedInUser'])) {
    header("Location: read.php");
    exit;
}

// If submit-button was pressed..
if (isset($_POST['submit'])) {

    // Retrieve posted data
    $username = mysqli_escape_string($db, $_POST['username']);
    $password = $_POST['password'];

    // Get username and password from database
    $query = "SELECT * FROM admin WHERE username = '$username'";
    $result = mysqli_query($db, $query) or die('Error: ' . $query);
    $admin = mysqli_fetch_assoc($result);


    // Check if username already exists in database
    $errors = [];
    if ($admin) {

        //Password validation
        if (password_verify($password, $admin['password'])) {

            // Set username for later use in Session
            $_SESSION['loggedInUser'] = [
                'name' => $admin['name'],
                'id' => $admin['id']
            ];

            // Redirect to read page & exit script
            header("Location: /hrfiles/CLE2-project-ramie/read.php");
            exit;

        } else {
            $errors[] = 'Uw logingegevens zijn onjuist';
        }

    } else {
        $errors[] = 'Uw logingegevens zijn onjuist';
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
    <a href="index.php"><div>Home</div></a>
    <a href="appointment.php"><div>Afspraak</div></a>
    <a href="gallery.php"><div>Gallery</div></a>
    <a href="prices.php"><div>Tarieven</div></a>
    <a href="contact.php"><div>Contact</div></a>
    <a href="login.php"><div>Login</div></a>
</nav>
<main>
    <section>
        <div class="user-login">
            <h1>Inloggen</h1>

            <?php if (isset($errors) && !empty($errors)) { ?>
                <ul class="errors">
                    <?php for ($i = 0; $i < count($errors); $i++) { ?>
                        <li><?= $errors[$i]; ?></li>
                    <?php } ?>
                </ul>
            <?php } ?>

            <form id="login" method="post" action="<?= $_SERVER['REQUEST_URI']; ?>">
                <div>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" value="<?= isset ($username) ? htmlentities($username) : '' ?>"/>
                </div>
                <div>
                    <label for="password">Wachtwoord</label>
                    <input type="password" name="password" id="password"/>
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