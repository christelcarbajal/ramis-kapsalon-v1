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
    <a href="prices.php"><div>Tarieven</div></a>
    <a href="contact.php"><div>Contact</div></a>
    <a href="login.php"><div>Login</div></a>
</nav>

<main>
    <section>
        <div id="biografie">
        <h1>Biografie</h1><br>
            <img src="images/ramie-biografie.JPG" alt="ramie-biografie" class="bio-img">
            <div class="biografie-tekst">
            <p> Ramyar Mohamad beter bekend als "Rami" is een kapper en eigenaar van Rami's Kapsalon.
            Sinds klein heeft hij grote interesse in de kapperswereld,
            waardoor hij al sinds zijn 12e kapper was en zo ging hij langzamerhand in de kapperswereld groeien.
            Met alleen nog 17 jaar oud was Rami Nederlandse kampioen geweest met knippen.
            Later op zijn 21ste heeft Rami een eigen kapperszaak opgestart.
            </p>
            </div>
        </div>
    </section>
    <section>
        <h1>Gallery</h1><br>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="images/gallery-pic1.jpeg">
            </div>
            <div class="mySlides fade">
                <img src="images/gallery-pic2.jpeg">
            </div>
            <div class="mySlides fade">
                <img src="images/gallery-pic3.jpeg">
            </div>
            <div class="mySlides fade">
                <img src="images/gallery-pic4.jpeg">
            </div>
            <div class="mySlides fade">
                <img src="images/gallery-pic5.jpeg">
            </div>
            <div class="mySlides fade">
                <img src="images/gallery-pic6.jpeg">
            </div>
            <div class="mySlides fade">
                <img src="images/gallery-pic7.jpeg">
            </div>
            <div class="mySlides fade">
                <img src="images/gallery-pic8.jpeg">
            </div>
            <div class="mySlides fade">
                <img src="images/gallery-pic9.jpeg">
            </div>
            <div class="mySlides fade">
                <img src="images/gallery-pic10.jpeg">
            </div>
            <div class="mySlides fade">
                <img src="images/gallery-pic11.jpeg">
            </div>
            <div class="mySlides fade">
                <img src="images/gallery-pic12.jpeg">
            </div>
            <div class="mySlides fade">
                <img src="images/gallery-pic13.jpeg">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div><br>

        <div class="dots">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
            <span class="dot" onclick="currentSlide(8)"></span>
            <span class="dot" onclick="currentSlide(9)"></span>
            <span class="dot" onclick="currentSlide(10)"></span>
            <span class="dot" onclick="currentSlide(11)"></span>
            <span class="dot" onclick="currentSlide(12)"></span>
            <span class="dot" onclick="currentSlide(13)"></span>
        </div>

    </section>
</main>
    <script src="js/main.js"></script>
<footer>
    <a href="#">Twitter</a> | <a href="https://www.instagram.com/ramiskapsalon/?hl=nl">Instagram</a> | <a href="https://www.facebook.com/ramiskapsalon/">Facebook</a>
</footer>
</body>
</html>