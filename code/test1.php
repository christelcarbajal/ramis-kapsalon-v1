<?php
$middlename = empty($_POST['middlename']) ? '' :  $_POST['middlename'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservering Geslaagd</title>
    <link   rel="stylesheet" href="index-style.css">
</head>
<body>
<h2>Reservering Geslaagd!</h2>

<?php
echo 'Voornaam:'.$_POST['firstname'].'<br>';
if ($middlename!='') {
    echo 'Tussenvoegsel:'.$_POST['middlename'].'<br>';
}

echo 'Achternaam:'.$_POST['lastname'].'<br>';
echo 'E-mail:'.$_POST['email'].'<br>';
echo 'Telefoon:'.$_POST['phone'].'<br>';

$date = date ('d-m-Y' , strtotime($_POST ['date']));
echo 'Datum:'.$date.'<br>';
?>
</body>
</html>