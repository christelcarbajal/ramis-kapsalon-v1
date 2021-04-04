<?php
// Database General Settings
$host = "localhost";
$name = "root";
$password = "";
$database = "reservation";


$db = mysqli_connect($host, $name, $password, $database)
or die("mysql connection failure:" . mysqli_connect_error());
