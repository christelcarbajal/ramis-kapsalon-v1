<?php

/** @var $db */

require_once "includes/database.php";

if (isset($_POST['submit'])) {
    $query = "DELETE FROM reservation.users WHERE id = " . mysqli_escape_string($db, $_POST['id']);
    mysqli_query($db, $query) or die ('Error: ' . mysqli_error($db));

    mysqli_close($db);

    header("Location: read.php");
    exit;


} else if (isset($_GET['id'])) {

    $userId = $_GET['id'];

    $query = "SELECT * FROM reservation.users WHERE id = " . mysqli_escape_string($db, $userId);
    $result = mysqli_query($db, $query) or die ('Error: ' . $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
    } else {
        // Redirect to 'read' page when result is not 1
        header('Location: read.php');
        exit;
    }
} else {
    // this gets executed if id was not present in the url or the form was not submitted
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
</head>
<body>
<h2>Verwijder Afspraak</h2>
<form action="" method="post">
    <p>
        Weet u zeker dat u de user
        <?= $user['firstname']?>
        <?= $user['lastname']?> op
        <?= $user['date']?>" wilt verwijderen?
    </p>
    <input type="hidden" name="id" value="<?= $user['id'] ?>"/>
    <input type="submit" name="submit" value="Verwijderen"/>
</form>
</body>
</html>
