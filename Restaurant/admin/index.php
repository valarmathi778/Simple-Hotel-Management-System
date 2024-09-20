<!DOCTYPE HTML>
<html>

<head>
<title>Shopping Login Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<style>
    .error-message {
        color: white;
        font-size: 14px;
        display: flex;
    }
    .invalid-input {
        border-color: white !important;
    }
    .Email, .password-agileits {
        margin-bottom: 20px;
        position: relative;
    }
    .Email .error-message,
    .password-agileits .error-message {
        position: relative;
        top: -20px;
        left: 0;
    }
</style>
</head>
<body>
    <div class="main-wthree">
        <div class="container">
            <div class="sin-w3-agile">
                <h2>Sign In</h2>
                <form action="register.php" method="post">
                    <div class="Email">
                        <span>Email:</span>
                        <input type="email" name="Email" id="email" class="name" placeholder="" required="">
                        <div id="emailError" class="error-message"></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="password-agileits">
                        <span>Password:</span>
                        <input type="password" name="password" id="pswd" class="password" placeholder="" required="">
                        <div id="passwordError" class="error-message"></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="rem-for-agile">
                        <input type="checkbox" name="remember" class="remember">Remember me<br>
                        <a href="#">Forgot Password</a><br>
                    </div>
                    <div class="login-w3">
                        <input type="submit" class="login" value="Sign In">
                    </div>
                    <div class="clearfix"></div>
                </form>
                <div class="back">
                    <a href="index.php">Back to home</a>
                </div>
                <div class="footer">
                    <p>&copy; 2024 Admin. All Rights Reserved | Design by Valarmathi</p>
                </div>
            </div>
        </div>
    </div>

    <?php
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['Email'];
        $password = $_POST['password'];
        
  
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<script>document.getElementById("emailError").innerHTML = "Invalid email address."; document.getElementById("emailError");document.getElementById("email").classList.add("invalid-input");</script>';
        }

   
        $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/';
        if (!preg_match($pattern, $password)) {
            echo '<script>document.getElementById("passwordError").innerHTML = "Invalid password."; document.getElementById("passwordError"); document.getElementById("pswd").classList.add("invalid-input");</script>';
        }
    }
    ?>

</body>
</html>
