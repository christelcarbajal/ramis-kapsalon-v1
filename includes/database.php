<?php
// Database General Settings
$host = "localhost";
$name = "root";
$password = "";
$database = "reservation";


$db = mysqli_connect($host, $name, $password, $database)
or die("Error:" . mysqli_connect_error());
