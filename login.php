<?php
require_once("init.php");
require_once("header.php");

if( isset($_POST["submit"]) ){
    $name = $_POST['username'];
    $pwd = $_POST['password'];
    $res = mysqli_query($conn,"select * from users where name='". $name ."'");
    if($res){
        if(mysqli_num_rows($res)>0){
            while($row = mysqli_fetch_assoc($res)){
                if(password_verify($pwd, $row['password'])){
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    header('Location:index.php');
                }
            }
        }
        else{
            echo "Account not existed.";
        }
    }
    else{
        echo "Not logged in";
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
    <link rel="stylesheet" href="css/settingr.css">
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
                        <h2 class="form-title">Login</h2>
                        <form method="POST" class="flex flex-col gap-4 my-4" action="login.php" id="login-form">
                            <div class="">
                                <label for="your_name"><i class=""></i></label>
                                <input type="text" name="username" id="username" required="_required"placeholder="username" class="p-2 border-2 border-blue-300 rounded text-sky-700"/>
                            </div>
                            <div class="">
                                <label for="your_pass"><i class=""></i></label>
                                <input type="password" name="password" id="password" required="_required" placeholder="Password" class="p-2 border-2 border-blue-300 rounded text-sky-700" />
                            </div>
                            
                            <div class="">
                                <input type="submit" name="submit" id="submit" class="float-right p-2 rounded bg-blue-500 text-white shadow-none hover:bg-blue-600 hover:shadow-xl" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with others</span>
                            <span class="social-label">Forget password</span>
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

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>