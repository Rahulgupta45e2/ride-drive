<html>
<head>
    <title>forget password</title>
    <link rel="stylesheet" href="s13.css">
</head>
<body>
    <form id="form" action="" method="post" class="">
        <h1 class="select--form h1">forget password</h1>
        <div class="">
            <label for="oldPwd">Password</label><br>
            <input name="oldPwd" id="oldPwd" type="text" placeholder="Password" maxlength="8" autocomplete="on"
                class="select--form-txt" required>
        </div>
        <div class=""select--form-txt">
            <label for="password">Create New Password</label><br>
            <input name="password" id="password" type="password" placeholder="Enter" maxlength="8" autocomplete="on"
                class="select--form-txt" required>
        </div>
        <div class="">
            <input name="cpassword" id="cpassword" type="password" placeholder="Re-Enter" maxlength="8"
                autocomplete="on" class="select--form-txt" required>
        </div>
        <div class="select--form-btn">
            <input name="log" type="submit" value="Confirm"
                class="select-form-btn">
        </div>
    </form>
    <!-- <p>dont have a account? <a href="register.php" class="text-blue-600">Register</a></p> -->
    </div>
    <script src="<?= PATH ?>/src/js/changePwd.js" defer></script>
</body 
</html>