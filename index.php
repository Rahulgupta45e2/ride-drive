<?php 
require_once('init.php');
require_once('header.php');
$sql = "SELECT car_id from booking where status=1";
$booked = mysqli_query($conn, $sql);
if(!$booked)
{
    die();
}
while($r = mysqli_fetch_assoc($booked)){
    $booked_cars_id[] = $r['car_id'];
}
?>

<section class="home" id="home">
    <div class="text">
        <h1><span>looking</span> to <br> rent a car</h1>
        <p>Sure, they’re just words. But they’re positive words. And <br> you’re on the verge of giving up or struggling
            to push<br> yourself to the next level, sometimes that’s just what you need. </p>
        <div class="app-store">
            <img src="img/appp.png" alt="">
            <img src="img/goggleplay.png" alt="">
        </div>
        <div class="form-container">
            <form action="">
                <div class="input-box">
                    <span>LOCATION</span>
                    <input type="search" name="" id="" placeholder="Search Places">
                </div>
                <div class="input-box">
                    <span>pick-up Date</span>
                    <input type="date" name="" id="">
                </div>
                <div class="input-box">
                    <span>Return Date</span>
                    <input type="date" name="" id="">
                </div>
                <input type="submit" name="" id="" class="btn">
            </form>

        </div>
    </div>
</section>
<!--- ride section start-->
<section class="ride" id="ride">
    <div class="heading">
        <span>how its work</span>
        <h1>rent with 3 easy steps</h1>
    </div>
    <div class="ride-container">
        <div class="box">
            <a href="#"><i class='bx bxs-map'></i>
            </a>
            <h2>CHOSSE a LOCATION</h2>
            <p>A location is the place where a particular point or object exists. ... A location is the place where a
                particular point or object exists. Location is an important term in geography, and is usually considered
                more precise than "place." A locality
                is a human settlement: city, town, village, or even archaeological site.</p>
        </div>
        <div class="box">
            <a href="#"><i class='bx bx-upload'></i></a>
            <h2>upload the document</h2>
            <p>​When making an application online, you often have to submit documents, for example,
                 a copy of your passport. You will need to upload these documents. In order to do this,
                  you need to first have a digital version of each document.
                   On this page you can find out how to create a digital version of physical documents and how to upload the digital version.
               </p>
        </div>
        <div class="box">
            <a href="#" i class='bx bxs-calendar-star'></i>
            </a>
            <h2>book car</h2>
            <p>Book Your car for rent Online
When you choose us for your car for rent booking requirements,
 we offer you premium services, and most importantly, high reliability.
 GoIbibo is considered one of the most popular car booking platforms. 
 Besides that, you can also visit the website for train, flight, and bus tickets. The best part is you can get top-notch cars for your preferred destination.
</p>
        </div>
    </div>
</section>
<!-- services-->
<section class="services" id="Sservices">
    <div class="heading">
        <span>BEST Booking SERVIES Provider</span>
        <h1>Expore out Top Deals <br> From Top Rated Dealers</h1>
    </div>
    <div class="services-container" id="booking">

        <?php
            $sql = "SELECT * FROM cars";
            $res = mysqli_query($conn, $sql);
            while($rows = mysqli_fetch_assoc($res)){
                // echo '<pre>';
                // var_dump($rows);
                // echo '</pre>';
                echo '<div class="box">
            <div class="box-img">
                <img src="img/'. $rows['img'] .'" alt="">
            </div>
            <p>'. $rows['year'] .'</p>
            <h3>'. $rows['model'] .'</h3>
            <h2>'. $rows['price'] .'<span>/month</span></h2>';
            echo '<a href="';
            if(isset($_SESSION['name'])){
                echo 'loc.php?cid='. $rows['id'];
            }else{
                echo 'login.php';
            }
            echo '" class="btn"> ';
             if(in_array($rows['id'], $booked_cars_id)){
                echo 'Booked';
            }else{
                echo 'Rent Now';
            } 
            echo ' </a>
            </div>';
            }
            
        ?>
    </div>

</section>
<!--about-->
<section class="about" id="about">
    <div class="heading">
        <span>about us</span>
        <h1>BEST customer experience</h1>
    </div>
    <div class="about-container">
        <div class="about-img">
            <img src="img/ryan-spencer-c-NEiPIxpYI-unsplash.jpg" alt="">
        </div>
        <div class="about-text">
            <span>About Us</span>
            <P>Compare The Biggest Car Rental Brands & Book Online in a Few Simple Steps. Unbeatable Prices. We Speak
                Your Language. No Credit Card Fees. Types: Economy, Mini, Compact, People carrier, Intermediate,
                Premium, 4x4, Estate, SUV, Convertible.</P>
            <p>Compare The Biggest Car Rental Brands & Book Online in a Few Simple Steps. Unbeatable Prices. We Speak
                Your Language. No Credit Card Fees. Types: Economy, Mini, Compact, People carrier, Intermediate,
                Premium, 4x4, Estate, SUV, Convertible.</p>
            <a href="#" class="btn">Learn more</a>
        </div>
    </div>

</section>
<section class="reviews" id="reviews">
    <div class="heading">
        <span>reviews </span>
        <h1>Best customer Experince say</h1>
    </div>
    <div class="reviews-container">
        <div class="box">
            <div class="rew-img">
                <img src="img/17.png" alt="">
            </div>
            <h2>dilip</h2>
            <div class="stars">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star-half"></i>
            </div>
            <p>Search Best Motor Car Insurance, Information from Trusted Internet Sources. Explore the Best Info Now.
                100+ Unique Results. Find All Info You Want. Quick Answers. Useful & Relevant. Find in Seconds. Services
            </p>
        </div>
        <div class="box">
            <div class="rew-img">
                <img src="img/17.png" alt="">
            </div>
            <h2>someone names</h2>
            <div class="stars">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star-half"></i>
            </div>
            <p>Search Best Motor Car Insurance, Information from Trusted Internet Sources. Explore the Best Info Now.
                100+ Unique Results. Find All Info You Want. Quick Answers. Useful & Relevant. Find in Seconds. Services
            </p>
        </div>
        <div class="box">
            <div class="rew-img">
                <img src="img/17.png" alt="">
            </div>
            <h2>someone names</h2>
            <div class="stars">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star-half"></i>
            </div>
            <p>Search Best Motor Car Insurance, Information from Trusted Internet Sources. Explore the Best Info Now.
                100+ Unique Results. Find All Info You Want. Quick Answers. Useful & Relevant. Find in Seconds. Services
            </p>
        </div>

    </div>
    <div class="select-form">
         <h1> enter your feedbacks </h1>
        <form  action="" method="post">
            <div >
                <input type="text" placeholder="enter your name " class="select-form-text" required>
            </div>
            <div>
                <textarea cols="30" rows="9" placeholder="enter your idea" class="select-form-text" required></textarea>
        </div>
            <div>
                <input type="submit" placeholder="submit" class="select-form-btn">
             </div>
    </form>
</div>
</section>
<!-- new later -->
<section class="newsleter">
    <h1>Subscribe to Newsleter</h1>
    <div class="box">
        <input type="text" placeholder="Enter Your Email">
        <a href="#" class="btn">Subscribe</a>
    </div>
</section>
<div class="copyright">
    <p>&#169: newweb all right reserved</p>
    <div class="social">
        <a href="#"><i class='bx bxl-facebook'></i></a>
        <a href="#"><i class='bx bxl-twitter'></i></a>
        <a href="#"><i class='bx bxl-instagram'></i></a>
        <a href="#"><i class='bx bxl-telegram'></i></a>
    </div>
</div>
<script src="icon.js"></script>

</html>