<?php
require_once('init.php');
require_once('header.php');
$id=$_GET['cid'];
?>
<link rel="stylesheet" href="s13.css">
<body>
    <div class="map">
        <div class="select-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19360.214520418413!2d75.84096541199882!3d30.904752971191453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a837462345a7d%3A0x681102348ec60610!2sLudhiana%2C%20Punjab!5e0!3m2!1sen!2sin!4v1650948470783!5m2!1sen!2sin" width="600" height="460px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="select-form">
            <h1>Fill-location-Details </h1>
            <form action='up.php?cid=<?= $id ?>' method="post">
                <input name="location" type="text" placeholder="location"  class="select-form-txt"/>
                <input name="pickup-date" type="date" placeholder="enter-pickup location"  class="select-form-txt"/>
                <input name="dropup-date" type="date" placeholder="enter-Dropup location" class="select-form-txt" />
                <input type="submit" name="submit" class="select-form-btn"/>
            </form>
        </div>
    </div>
</body>

</html>