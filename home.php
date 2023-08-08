<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  
  
</head>
<body>
  
<section class="header">
    <a href="home.php" class="logo">travel</a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
    </nav>
   
    <div id="menu-btn" class="fas fa-bars"></div>

    
</section>


<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel arround the world</h3>
                    <a href="package.php" class="btn">discover more</a>

                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover the new places</h3>
                    <a href="package.php" class="btn">discover more</a>

                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
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



<!-- services section starts -->
<section class="services">
    <h1 class="heading-title"> our services </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>adventure </h3>
        </div>

        <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>tour guide </h3>
        </div>

        <div class="box">
            <img src="images/icon-3.png" alt="">
            <h3>trekking</h3>
        </div>

        <div class="box">
            <img src="images/icon-4.png" alt="">
            <h3>camp fire</h3>
        </div>
        <div class="box">
            <img src="images/icon-5.png" alt="">
            <h3>off road</h3>
        </div>
        <div class="box">
            <img src="images/icon-6.png" alt="">
            <h3>camping</h3>
        </div>
    </div>
</section>
<!-- services section ends -->


<!-- home about section starts -->
<section class="home-about">
    <div class="image">
        <img src="images/about-img.jpeg" alt="">
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>Our commitment to excellence is reflected in the quality of our service, 
            as we prioritize punctuality, safety, and comfort.Our professional drivers are not only skilled and 
            experienced but also courteous and attentive, ensuring a pleasant and enjoyable journey.</p>

            <a href="about.php" class="btn">read more</a>
    </div>
</section>

<!-- home about section ends -->


<!-- home packages section starts -->

<section class="home-packages">
    <h1 class="heading-title">our packages</h1>

    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="images/img-1.jpg" alt="">
            </div>
            <div class="content">
               <h3>Taj Mahal</h3> 
               <!-- <p>The Taj Mahal is an ivory-white marble mausoleum on the south bank of the Yamuna river in the Indian city of Agra.
                 It was commissioned in 1632 by the Mughal emperor, Shah Jahan (reigned from 1628 to 1658), to house the tomb of his favourite wife, 
                 Mumtaz Mahal.</p> -->

               <a href="book.php" class="btn">book now </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-2.jpg" alt="">
            </div>
            <div class="content">
               <h3>Panay Island</h3> 
               <!-- <p>Most travelers know Panay as the jumping-off point for the white-sand, turquoise-water beaches in Boracay. 
                But if you’ve got a few extra days to explore, you’ll find a whole lot more to the Filipino island—from the
                 rugged mountains and rivers of Antique to the history and architecture of Iloilo City. It’s also a food-lover’s 
                 dream: Dig into the best seafood in the country (some travelers say) at Baybay Beach or hop over to Guimaras Island to 
                 try some of the sweetest mangoes in the world.</p> -->

               <a href="book.php" class="btn">book now </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-3.jpg" alt="">
            </div>
            <div class="content">
               <h3>Lombok</h3> 
               <!-- <p>If it were located anywhere else in the world, Lombok would be on everyone’s bucket list. But because it’s just east of Bali, fewer people have heard of its secluded coves, endless string of cream-colored beaches, and waterfalls 
                crashing through its impossibly lush foliage. Fine with us, because that means it’s also less crowded.</p> -->

               <a href="book.php" class="btn">book now </a>
            </div>
        </div>

    </div>

    <div class="load-more"><a href="package.php" class="btn">load more</a></div>


</section>
<!-- home packages section ends -->

<!-- home offer section starts -->
<section class="home-offer">
    <div class="content">
        <h3>upto 30% off</h3>
        <p>Traveler's can receive up to 30% discount </p>
        <a href="book.php" class="btn">book now </a>
    </div>
</section>
<!-- home offer section ends -->



<section class="footer">
    <div class="box-container">

        <div class="box">
            <h3>Quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i>about us</a>
            <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
            <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
            <a href="#"><i class="fas fa-envelope"></i>dinendra@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i>Negombo ,Sri lanka</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
            <a href="#"><i class="fab fa-twitter"></i>twitter</a>
            <a href="#"><i class="fab fa-instagram"></i>instagram</a>
            <a href="#"><i class="fab fa-twitter"></i>twitter</a>
            <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
        </div>
    </div>

    <div class="credit">Creadit by <span>mr.web designer </span> | all rights reserved!</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>