<?php
require_once("init.php");
require_once("header.php");

if( isset($_POST["submit"]) ){
    $name = $_POST['username'];
    $pwd = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $res = mysqli_query($conn,"select * from users where name='". $name ."'");
    
    if($res){
        if(mysqli_num_rows($res)==0){
            $do = mysqli_query($conn, "INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, '$name', '$email', '$pwd')");
            
						if($do){
							$_SESSION['name'] = $name;
							header('Location:index.php');
							die();
						}else{
                            echo mysqli_error($conn);
                        }
        }
        else{
            echo "Account with this name is already exist.";
        }
    }
    else{
        echo "Something went wrong";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>


        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="img/w1.jpeg" alt="sing up image"></figure>
                        <a href="signup.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign Up</h2>
                        <form method="post" class="register-form" action="signup.php" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" required="_required"placeholder="username"/>
                            </div>
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="email" required="_required"placeholder="email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-phone material-icons-name"></i></label>
                                <input type="number" name="phone" id="phone" required="_required"placeholder="phone no"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" required="_required" placeholder="Password"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Create"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="https://www.facebook.com/brightbachelor"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <?php
    // var_dump($res);
    // var_dump($_POST);
    var_dump($do);
    ?>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>