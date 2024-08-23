<?php
require_once 'includes/config.inc.php';
require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<center>
<body>
    <br>
<h3>Login</h3>
<form action="includes/login.inc.php" method="POST">
        <input type="text" name="username" placeholder = "Username/Email/Phone Number" required><br><br>
        <input type="password" name="pwd" placeholder = "Password" required><br><br>
        <label for="remember_me">Remember me</label>
        <input type="checkbox" name="remember" style="margin-right: 40px;"> <button>Login</button>
</form> 
        <?php
            check_login_errors(); 
        ?>
        <br>
        <a href="forgetpwdemail.php" style="text-decoration: none;">Forget Password?</a>
        <h4>Don't have an account?</h4>
 <button><a href="index.php">Register Here</a></button>
</body>
</center>
</html>