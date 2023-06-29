<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- header section starts -->
<section class="header">
    
    <a href="home.php"><img src="01.jpg" class="images"> <span class="logo">EL-IRWAA TRAVEL & TOURS LIMITED </span></a>
    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="book.php">Book</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section ends -->    

<!-- home section starts -->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(300.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel around the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background:url(14.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover new places</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background:url(13.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<!-- home section ends -->

<!-- services section starts -->
<section class="services">
    <h1 class="heading-title">our services</h1>
    <div class="box-container">
        <div class="box">
            <a href="adventure.php"><img src="f.png"><h3>Adventure</h3></a>
        </div>
        <div class="box">
            <a href="tourism.php"><img src="w.png"><h3>Tourism</h3></a>
        </div>
        <div class="box">
            <a href="honeymoon.php"><img src="hh.png"><h3>Honeymoon</h3></a>
        </div>
        <div class="box">
            <a href="hajjbook.php"><img src="800.png"><h3>Hajj & Umrah</h3></a>
        </div>
        <div class="box">
            <a href="family.php"><img src="mm.png"><h3>Family Trip</h3></a>
        </div>
    </div>
</section>
<!-- services section ends -->

<!-- home packages section starts -->
<section class="home-packages">
    <h1 class="heading-title">our packages</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
            <a href="hajjbook.php">
                <img src="300.jpg" alt="">
            </div>
            <div class="content">
                <h3>Hajj & Umrah</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, soluta?</p>
                <span class="btn"> book now</span></a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <a href="adventure.php">
                <img src="2.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, soluta?</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <a href="honeymoon.php">
                <img src="88.jpg" alt="">
            </div>
            <div class="content">
                <h3>Honeymoon</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, soluta?</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

    </div>
    <div class="load-more">
        <a href="package.php" class="btn">load more</a>
    </div>
</section>
<!-- home packages section ends -->

<!-- home offer section starts -->
<!--
<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae sequi dolor assumenda periam, expedita perspiciatis molestiae enim veritatis nisi minus.</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>
-->

<!-- home offer section ends -->

<!-- footer section starts -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
        </div>
        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> about us</a>
            <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
        </div>
        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +234-803-314-4751</a>
            <a href="#"><i class="fas fa-phone"></i> +234-803-314-4751</a>
            <a href="#"><i class="fas fa-envelope"></i> elirwaa@gmail.com</a>
            <a href="https://www.google.com/maps/place/Al-Itqaan+Academy/@10.5455693,7.4700572,112m/data=!3m1!1e3!4m6!3m5!1s0x11b2b53ad799117b:0x21df7dd95db882a9!8m2!3d10.5453724!4d7.4699873!16s%2Fg%2F11fx95pwhw?entry=ttu"><i class="fas fa-map"></i> #No 5, Isa Kaita road, Malali G.R.A. Kaduna.</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
        </div>
    </div>
    <div class="credit">created by <span>ALITQAAN ACADEMY</span> | all right reserved! </div>
</section>
<!-- footer section ends -->

<!-- swiper js link -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="script.js"></script>
</body>
</html>
