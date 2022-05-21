<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>car REntal WEBSITE</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    
<header>
    <a href="#" class="logo"><img src="img/w1.jpeg" alt=""></a>
    <div class="bx bx-menu" id="menu-icon"></div>
    <ul class="navbar">
        <li><a href="index.php">home</a></li>
        <li><a href="#ride">ride</a></li>
        <li><a href="index.php#booking">booking</a></li>
        <li><a href="">about</a></li>
        <li><a href="">reviews</a></li>
    </ul>
    <div class="header-btn">
        <?php
        if(!isset($_SESSION['name'])){
            echo '<a href="signup.php" class="sign-up">sign up</a>';
            echo '<a href="login.php" class="sign-in">log-in</a>';
        }else{
            echo '<a href="" class="sign-up">'. $_SESSION['name'] .'
            </a>
            ';
            echo '<a href="logout.php" class="sign-in">logout</a>';
        }
        ?>
    </div>
</header>