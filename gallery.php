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
<body>
<header><a href="appointment.php"><div id="submit"><input type="submit" name="submit" value="Make an appointment"/></div></a></header>
<nav>
    <a href="home.php"><div>Home</div></a>
    <a href="appointment.php"><div>Afspraak</div></a>
    <a href="gallery.php"><div>Gallery</div></a>
    <a href="prices.php"><div>Tarieven</div></a>
    <a href="contact.php"><div>Contact</div></a>
    <a href="login.php"><div>Login</div></a>
</nav>
<main>
    <section>
        <div id="gallery">
            <h1>Gallery</h1><br>

            <div class="container">
                <!-- Close the image -->
                <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
                <img id="expandedImg">
                <div id="imgtext"></div>
            </div>
            <div class="row">
                <div class="column">
                    <img src="images/pic1.JPG" alt="Rami's Kapsalon" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="images/pic2.JPG" alt="Rami's Kapsalon" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="images/pic3.JPG" alt="Rami's Kapsalon" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="images/pic4.JPG" alt="Rami's Kapsalon" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="images/pic5.JPG" alt="Rami's Kapsalon" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="images/pic6.JPG" alt="Rami's Kapsalon" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="images/pic7.JPG" alt="Rami's Kapsalon" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="images/pic8.JPG" alt="Rami's Kapsalon" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="images/pic9.JPG" alt="Rami's Kapsalon" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="images/pic10.JPG" alt="Rami's Kapsalon" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="images/pic11.JPG" alt="Rami's Kapsalon" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="images/pic12.JPG" alt="Rami's Kapsalon" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="images/pic13.JPG" alt="Rami's Kapsalon" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="images/pic14.JPG" alt="Rami's Kapsalon" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="images/pic15.JPG" alt="Rami's Kapsalon" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="images/pic16.JPG" alt="Rami's Kapsalon" onclick="myFunction(this);">
                </div>
            </div>
        </div>
    </section>
</main>
<script src="js/main.js"></script>
<footer>
    <a href="#">Twitter</a> | <a href="https://www.instagram.com/ramiskapsalon/?hl=nl">Instagram</a> | <a href="https://www.facebook.com/ramiskapsalon/">Facebook</a>
</footer>
</body>
</html>

