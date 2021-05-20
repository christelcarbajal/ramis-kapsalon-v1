<?php

//Linking Database
require_once "includes/database.php";

//Fix undefined variable
/** @var $db */


//Check if form is submitted
if (isset($_POST['submit'])) {

    //Get user information  from session
    $loggedInUser = $_SESSION['loggedInUser'];

    //Retrieve data and post back to user
    $firstname = mysqli_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_escape_string($db, $_POST['lastname']);
    $email = mysqli_escape_string($db, $_POST['email']);
    $phone = mysqli_escape_string($db, $_POST['phone']);
    $date = mysqli_escape_string($db, $_POST['date']);
    $time = mysqli_escape_string($db, $_POST['time']);

    //Validation form required
   require_once "includes/validation-form.php";

    //If there are no errors..
    if (empty($errors)){

        //data will be saved to db
        $query = "INSERT INTO reservations (firstname, lastname, email, phone, date, time)
                  VALUES ('$firstname', '$lastname', '$email', '$phone', '$date', '$time')";
        $result = mysqli_query($db, $query) or die('Error:' . $query);


        if ($result) {
            header("Location: /hrfiles/CLE2-project-ramie/confirmation.php?firstname=$firstname&lastname=$lastname&email=$email&phone=$phone&date=$date&time=$time");
            exit;
        } else {
            $errors['db'] = 'Er is iets fout gegaan, probeer nogmaals opnieuw: ' . mysqli_error($db);

//            // To control if there is an error, without sending it to the user.
//            die(mysqli_error($db));

        }

        // Close the db connection
        mysqli_close($db);
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
        <div class=" user-login">
        <h1>Afspraak maken</h1><br>
            <?php if(isset($errors)) { ?>

                <ul class="errors">
                    <?php foreach ($errors as $error) { ?>
                        <li><?= $error ?></li>
                    <?php } ?>
                </ul>
            <?php } ?>

            <form action="" method="post">

            <div><label for="firstname">Voornaam:</label>
            <input type="text" id="firstname" name="firstname" value="<?php if (isset($firstname)) { echo $firstname; } ?>"/></div>

            <div><label for="middlename">Tussenvoegsel:</label>
            <input type="text" id="middlename" name="middlename"></div>

            <div><label for="lastname">Achternaam:</label>
            <input type="text" id="lastname" name="lastname" value="<?php if (isset($lastname)) { echo $lastname; } ?>"/></div>

            <div><label for="email">E-mail:</label>
            <input type="email" id="email" name="email" value="<?php if (isset($email)) { echo $email; } ?>"/></div>

            <div><label for="phone">Telefoon:</label>
            <input type="text" id="phone" name="phone" value="<?php if (isset($phone)) { echo $phone; } ?>"/></div>

            <div><label for="date">Datum:</label>
            <input type="date" id="date" name="date" min="2021-01-01" max="2025-12-31" value="<?php if (isset($date)) { echo $date; } ?>"/></div>

            <div><label for="time">Tijd:</label>
                <input type="time" id="time" name="time" value="<?php if (isset($time)) { echo $time; } ?>"/></div>

            <div> <input type="submit" name="submit" value="Submit"/></div>

        </form>
        </div>
    </section>

</main>
<script src="js/main.js"></script>
</body>
<footer>
    <a href="#">Twitter</a> | <a href="https://www.instagram.com/ramiskapsalon/?hl=nl">Instagram</a> | <a href="https://www.facebook.com/ramiskapsalon/">Facebook</a>
</footer>
</html>