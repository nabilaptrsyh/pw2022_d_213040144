<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Entertainment Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
</head>
<body>
    <section class="header">
    <nav>
        <a href="home.php"><img src=""></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="#course">HOME</a></li>
                <li><a href="#contact">ABOUT</a></li>
                <li><a href="">SIGN IN</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>

    <div class="text-box">
        <h1>The World Biggest Entertainment</h1>
        <p>Find out your artist just for a second!<br>Enjoy this website. If you interested this website:</p>
        <a href="registrasi.php" class="hero-btn">Sign Up to Know More</a>
    </div>

    </section>
    
    <!-- Course -->
    <section class="course" id="course">
        <h1>The Options I Show</h1>
        <p>Some options you can find in this website</p>

        <div class="row">
            <div class="course-col">
                <h3>Picture</h3>
                <p>You can see images if you see databases.</p>
            </div>
            <div class="course-col">
                <h3>Biodata</h3>
                <p>You can also know biodata in databases.</p>
            </div>
        </div>

    </section>

    <!-- Campus -->
    <section class="campus" id="campus">
        <h1>The Spoiler That I Can Show You</h1>
        <p>This famous artist will make you more interested in this website</p>
    
        <div class="row">
            <div class="campus-col">
                <img src="img/arianagrande.jpg">
                <div class= "layer">
                    <h3>ARIANA GRANDE</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="img/gigihadid.jpg">
                <div class= "layer">
                    <h3>GIGI HADID</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="img/kendalljenner.jpg">
                <div class= "layer">
                    <h3>KENDALL JENNER</h3>
                </div>
            </div>
        

    </section>

    <!-- Contact -->
    <section class="contact" id="contact">
        <h1>If you want to join this website, <br> You can contact me:</h1>
        <a href="" class="hero-btn">In here!</a>
    </section>

    <!-- Footer -->
    <section class="footer">
        <h4>About Us</h4>
        <p>Thankyou so much for visiting my website, i hope this website doesn't disappoint you, and i hope that you'll like my website a lot.
            <br>Dont forget to visit this website again, i'll keep waiting!
        </p>
        <p>Copyright @2022 | Made by Nabila</p>
    </section>


    <!-- JavaScript for Toggle Menu -->
    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu() {
            navLinks.style.right = "0";
        }
        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>

</body>
</html>
